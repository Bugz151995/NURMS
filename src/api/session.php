<?php
final class Session {
  private $user;
  
  public function __construct($user_data) {  
    session_start();
    //fill the associative array to session variable
    $_SESSION['USER_ID'] = $user_data['user_account_id'];
    $_SESSION['FIRST_NAME'] = $user_data['first_name'];
    $_SESSION['LAST_NAME'] = $user_data['last_name'];
    $_SESSION['MIDDLE_NAME'] = $user_data['middle_name'];
    $_SESSION['FB_LINK'] = $user_data['fb_link'];
    $_SESSION['CONTACT_NUM'] = $user_data['c_num'];
    $_SESSION['STREET'] = $user_data['street'];
    $_SESSION['BARANGAY'] = $user_data['barangay'];
    $_SESSION['CT_MUN'] = $user_data['ct_mun'];
    $_SESSION['PROVINCE'] = $user_data['province'];
    $_SESSION['ZIP_CODE'] = $user_data['zip_code'];
    $_SESSION['EMAIL'] = $user_data['email'];
    $_SESSION['IS_SIGNED_IN'] = true;
  }
}