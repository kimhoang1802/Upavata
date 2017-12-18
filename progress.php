<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
if(isset($_POST['token'])){
	$token = explode("\n",$_POST['token']);
	$list_anh = array('http://bestauto.pro/_pro/tools/avt/avt1.jpg','http://bestauto.pro/_pro/tools/avt/avt2.jpg','http://bestauto.pro/_pro/tools/avt/avt3.jpg','http://bestauto.pro/_pro/tools/avt/avt4.jpg','http://bestauto.pro/_pro/tools/avt/avt5.jpg','http://bestauto.pro/_pro/tools/avt/avt6.jpg','http://bestauto.pro/_pro/tools/avt/avt7.jpg'); // tkay njst njnk ank? và0 dax
	$i = 0;
	$c = count($token);
	for(;$i<$c;){
		$anh = trim($list_anh[array_rand($list_anh)]);
		$t = trim($token[$i]);
		echo "<script>$.getJSON('https://graph.fb.me/me/photos?access_token=$t&caption=beautiful&url=$anh&method=post', function(DuySex){ var id = DuySex.id; $.getJSON('https://graph.fb.me/me/picture?photo='+id+'&caption=hihi&access_token=$t&method=post&width=700&height=700',function(Duy){console.log('success id: '+ Duy.id);});});</script>"; // thích xử lí cho token die, live thì dùng .done() .fail()
		++$i;
	}
	echo 'Thành công';
}else{
	echo 'Bien me may dj';
}
?>
