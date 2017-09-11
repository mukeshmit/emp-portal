<?php
/**
 * Created by Joe of ExchangeCore.com
 */
// $ldap_dn = "cn=read-only-admin,dc=example,dc=com";
// $ldap_pwd = "password";


if(isset($_POST['username']) && isset($_POST['password'])){

    $adServer = "54.196.176.103";
    $port = "389";
    // $adServer = "ldap.forumsys.com";
	
    // $ldap_conn = ldap_connect($adServer);
    $ldap_conn = ldap_connect($adServer,$port);
	
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $ldaprdn = 'mydomain' . "\\" . $username;
	$ldap_dn = "uid=".$username.",dc=example,dc=com";
	// $ldap_dn = "ou=scientists,dc=example,dc=com";
	
    ldap_set_option($ldap_conn, LDAP_OPT_PROTOCOL_VERSION, 3);
    // ldap_set_option($ldap_conn, LDAP_OPT_REFERRALS, 0);

    $bind = @ldap_bind($ldap_conn, $ldap_dn, $password);

	

    if ($bind) {
        // $filter="(uid=*)";
        $filter="(uid=$username)";
        // $filter="(mail=einstein@ldap.forumsys.com)";
        // $filter="(cn=Einstein)";
        $result = ldap_search($ldap_conn,"dc=example,dc=com",$filter) or exit("unable to search.");
		
        // ldap_sort($ldap_conn,$result,"sn");
        $info = ldap_get_entries($ldap_conn, $result);
		
		// echo '<pre>';
		// print_r($info);
		// echo '</pre>';
		
        for ($i=0; $i<$info["count"]; $i++)
        {
            if($info['count'] > 1)
                break;
            echo "<p>You are accessing <strong> ". $info[$i]["sn"][0] .", " . $info[$i]["cn"][0] ."</strong><br /> (" . $info[$i]["uid"][0] .")</p>\n";
            // echo '<pre>';
            // var_dump($info);
            // echo '</pre>';
            $userDn = $info[$i]["dn"]; 
        }
		
        @ldap_close($ldap_conn);
		
    } else {
		
        $msg = "Invalid username / password";
        echo $msg;
    }

}else{
?>
    <form action="#" method="POST">
        <label for="username">Username: </label><input id="username" type="text" name="username" /> 
        <label for="password">Password: </label><input id="password" type="password" name="password" />        <input type="submit" name="submit" value="Submit" />
    </form>
<?php } ?> 