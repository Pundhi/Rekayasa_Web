<?php 
	# Koneksi ke server
	$db = mysql_connect("localhost","root","");
	if (!$db) {
		die('Tidak dapat tersambung dengan database: ' . mysql_error());
	}
	# Koneksi ke Database
	mysql_select_db("xml",$db);
	$result = mysql_query("select * from jurusan", $db);
	# Membuat objek simleXMLElement
	$xml = new SimpleXMLElement('<xml/>');
	# Menambah isi kolom node pada object XML
	 while($row = mysql_fetch_assoc($result)) {
	        $mydata = $xml->addChild('program_studi');
	        $mydata->addChild('Id',$row['id_jurusan']);
	        $mydata->addChild('Jurusan',$row['nama_jurusan']);
	        $mydata->addChild('Fakultas',$row['fakultas']);
	        $mydata->addChild('Email_Jurusan',$row['email_jurusan']);
	        $mydata->addChild('Web_Jurusan',$row['web_jurusan']);
	        $mydata->addChild('Nomor_Telepon_Jurusan',$row['no_tlp_jurusan']);
	}
# Menutup koneksi MySQL
    mysql_close($db);
    # Kondisi jika file XML ada
    if(file_exists("jurusan.xml")){
        echo "File XML untuk jurusan sudah ada";
    }
    else{
    # Membuat File XML
    $fp = fopen("jurusan.xml","wb");
    # Menulis node XML
    fwrite($fp,$xml->asXML());
    # Menutup koneksi database
    fclose($fp); 
    echo "File XML jurusan.xml sudah 
terconvert. 
Silahkan anda buka file jurusan.xml";
    }
?>
