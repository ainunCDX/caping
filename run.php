Skip to content
Why GitHub? 
Enterprise
Explore 
Marketplace
Pricing 
Search

Sign in
Sign up
Code Issues 1 Pull requests 1 Projects 0 Security Pulse
Join GitHub today
GitHub is home to over 40 million developers working together to host and review code, manage projects, and build software together.

caping/run.php
@dancok_crew Create run.php
ecd9f38 on Jan 20, 2020
97 lines (94 sloc)  3.78 KB
  
<?php
// FB : BAJIRET
echo "Masukkan UserId/Uid : ";
$uid 	= trim(fgets(STDIN));
echo "Masukkan N ID : ";
$n 	= trim(fgets(STDIN));
echo "Masukkan Jumlah Suntik : ";
$jumlah	= trim(fgets(STDIN));
echo "SetSleep : ";
$wait	= trim(fgets(STDIN));
    $i=0;
while($i<$jumlah){
			sleep($wait);
			$i++;
			flush();
			
		$news		=	news($uid,$n);
		$video		=	video($uid,$n);
		$share		=	share($uid,$n);
		$code		=	code($uid,$n);
		$klik		=	klik($uid,$n);
	echo "TASK NEWS  $news\n";
	echo "TASK VIDEO $video\n";
	echo "TASK SHARE $share\n";
	echo "TASK CODE  $code\n";
	echo "TASK KLIK  $klik\n";
	
	}

function news($uid,$n){ 
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/news/view/$rand"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
				$headers[] = "Cookie: u=$uid;n=$n";
				$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 7.1.2; SM-N950N Build/NMF26X; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/75.0.3770.143 Mobile Safari/537.36;CapingNews/5.1.6";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function video($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/video/view/$rand"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 7.1.2; SM-N950N Build/NMF26X; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/75.0.3770.143 Mobile Safari/537.36;CapingNews/5.1.6";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function share($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/share/news/$rand"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 7.1.2; SM-N950N Build/NMF26X; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/75.0.3770.143 Mobile Safari/537.36;CapingNews/5.1.6";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function code($uid,$n){
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/share/code"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 7.1.2; SM-N950N Build/NMF26X; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/75.0.3770.143 Mobile Safari/537.36;CapingNews/5.1.6";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function klik($uid,$n){
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai2.caping.co.id/v2/event/share/click/push"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 7.1.2; SM-N950N Build/NMF26X; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/75.0.3770.143 Mobile Safari/537.36;CapingNews/5.1.6";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
?>
© 2020 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About
