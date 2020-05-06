<?php
/**
 * 
 * If you are a reliable programmer or the best developer, please don't change anything.
 * If you want to be appreciated by others, then don't change anything in this script.
 * Please respect me for making this tool from the beginning.
 */
error_reporting(0);

    $curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url_based . "/me/friendrequests?limit=5000&access_token=" . $token);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$wahyuarifpurnomo = curl_exec($curl);
    curl_close($curl);
    
    $decode = json_decode($ahmadchenwangxuesi);
    
    $climate->br()->info('Required retrieve ID friend request');
    sleep(3);
    $climate->br()->info('Starting retrieve ID friend request..');
    echo "\n";
    progress($progress);

    $no = 0;
    foreach ($decode->data as $hasil) {
        $no++;
        $colorstring = getName($n);
        $namerequests = $hasil->from->name;
        $idrequests = $hasil->from->id;
        if (!empty($idrequests)) {
            echo $no.".". $colors->getColoredString(" $namerequests | $idrequests", $warifp[$colorstring]) . "\n";
            $save = fopen('tmp/id_requests_friends.log', 'a');
            fwrite($save, $idrequests ."\n");
            fclose($save);
        }
    }

    /** Collect Requests Male Friends */
    $list = "tmp/id_requests_friends.log" or die ("File ID not found!");
    $climate->br()->info('Retrieve ID friend request success');
    sleep(3);
    $climate->br()->info('Require retrieve gender your friends');
    sleep(3);
    $climate->br()->info('Starting retrieve gender your friends..');
    echo "\n";
    progress($progress);
    
    $file = file_get_contents("$list");
    $data = explode("\n", str_replace("\r", "", $file));
    $x = 0;
    for ($a = 0; $a < count($data); $a++) {
    $id   = $data[$a];
    $x++;
    $curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url_based . "/" . $id . "/?access_token=" . $token);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$wahyuarifpurnomo = curl_exec($curl);
    curl_close($curl);
    $decode = json_decode($ahmadchenwangxuesi);
    $colorstring = getName($n);
    $gender = $decode->gender;
    $name = $decode->name;
    if($gender == "female"){
        echo $x.".". $colors->getColoredString(" ID : $id | Name : $name | $gender", $warifp[$colorstring]) . "\n";
        $save = fopen('tmp/id_requests_friends_female.log', 'a');
        fwrite($save, $id ."\n");
        fclose($save);
	}
} 
    
    $list = "tmp/id_requests_friends_female.log" or die ("File ID not found!");
    $climate->br()->info('Retrieve gender female friends success');
    sleep(3);
    $climate->br()->info('Starting confirmation female friends..');
    echo "\n";
    progress($progress);
    
    $file = file_get_contents("$list");
    $data = explode("\n", str_replace("\r", "", $file));
    $x = 0;
    for ($a = 0; $a < count($data); $a++) {
    $id   = $data[$a];
    $x++;
    $curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url_based . "/me/friends/" . $id . "?access_token=" . $token);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$wahyuarifpurnomo = curl_exec($curl);
    curl_close($curl);
    $colorstring = getName($n);
    if($wahyuarifpurnomo == true){
		echo $x.".". $colors->getColoredString(" ID : $id | Success confirmation ..", $warifp[$colorstring]) . "\n";
	} else {
        echo $x.".". $colors->getColoredString(" ID : $id | Failed to confirmation ..", $warifp[$colorstring]) . "\n";
    }
}
     
    $climate->br()->shout('Done, confirmation your all friends based on gender female.');
    $climate->br()->info('Cleaning log..');
    echo "\n";
    progress($progress);
    $delete_id = "id_requests_friends.log";
    $delete_gender = "id_requests_friends_female.log";
    unlink($delete_id) or die("\e[1;31mCouldn't delete file, file not found\e[0m");
    unlink($delete_gender) or die("\e[1;31mCouldn't delete file, file not found\e[0m");
    sleep(3);
    $climate->br()->info('Done cleaning log.');
    
/**
 * 
 * If you are a reliable programmer or the best developer, please don't change anything.
 * If you want to be appreciated by others, then don't change anything in this script.
 * Please respect me for making this tool from the beginning.
 */
