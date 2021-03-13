<?php
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
error_reporting(E_ALL & ~E_NOTICE);

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));

echo "isinya data===".$request;
echo "method===".$method;

$input = file_get_contents('php://input');

$mysql = new mysqli("localhost", "u603544040_admin", "8dG@f2FV@", "u603544040_akademik");
mysqli_set_charset($mysql,'utf8');

 
$data = preg_replace('/[^a-z0-9_]+/i','', json_decode ($input, true));

// print_r($data);
// exit;
echo "isinya data===".$data;
$id = json_decode($input, true)['nim'];
echo "isinya data===".$id;
// echo ;
// exit;

if (strcmp($data[0], 'data') ==0) {
 switch ($method) {
 case 'GET':
     {
    if (empty($id))
    {
    $sql = "select * from mahasiswa"; 
    echo "select * from mahasiswa ";break;
    }
    else
    {
         $sql = "select * from mahasiswa where nim='$id'";
         echo "select * from mahasiswa where nim='$id'";break;
        
        
    }
    
    
    
    
     }
 }
 
 
 
 $result = mysqli_query($mysql,$sql);
 
 if (!$result) {
 http_response_code(404);
 die(mysqli_error());
 }
 
 
 
 
 if ($method == 'GET') {
 $hasil=array();
 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
 {
 $hasil[]=$row;
 } 
 $hasil1 = array('status' => true, 'message' => 'Data show succes', 'data' => $hasil);
 echo json_encode($hasil1);
 
 } 
   
}

else{
 $hasil1 = array('status' => false, 'message' => 'Access Denied');
 echo json_encode($hasil1)."</br>";
}

if ($method == 'POST') {
        echo "Method POST";
        echo "Data input ".$input;
        
        ////
        
        $json = json_decode($input, true);
        echo "json =".$json["nim"] ;
        echo "Proses".$json->nim;
        $nimmhsw=$json["nim"];
        $namamhsw=$json["nama"];
        $prodimhsw=$json["prodi"];
    

		$querycek = "SELECT nim,nama,progdi FROM mahasiswa WHERE nim ='$nimmhsw'.'$namamhsw'.'$prodimhsw'";
		echo "query select ".$querycek;
		$result=mysqli_query($mysql,$querycek);
		echo "result =".$result;
		
	echo "result =".$result."</br>";
		
		if ( $result -> num_rows == 0)
		{
		$query = "INSERT INTO mahasiswa (
		nim,
		nama,
		prodi)
		VALUES (				
		'$nimmhsw',
		'$namamhsw',
		'$prodimhsw')";
		echo "query ".$query;
		mysqli_query($mysql,$query);
		}
		else if ($rowcount > 0)
		{
		$query = "UPDATE mahasiswa SET
		nama = '$namamhsw',
		prodi = '$prodimhsw'
		WHERE nim ='$nimmhsw'";
		echo "query ".$query;
		mysqli_query($mysql,$query);
		}
        
        
        
        /////
        }
        
mysqli_close($mysql);
?>