<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_admin.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>


    <div class="container">
        <div class="panel">
            <h2 class="panel_h2">Admin</h2>
            <div class="panel_buttons">
                <button class="btn btn_panel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.19246 2.72527L2.24082 2.67473C3.52577 1.38967 4.36254 1.04905 5.25536 1.56246C5.51218 1.71014 5.75295 1.91686 6.08034 2.24938L7.08459 3.29073C7.63927 3.89599 7.76537 4.47656 7.58475 5.15648L7.55987 5.24649L7.53225 5.33599L7.398 5.72987C7.11066 6.61319 7.23062 7.11156 8.25295 8.13363C9.31609 9.19649 9.81235 9.28344 10.7638 8.95096L10.9334 8.89202L11.1384 8.82543L11.2282 8.80052C11.9509 8.60771 12.5613 8.76158 13.2088 9.40858L14.0179 10.1902L14.2561 10.4244C14.5202 10.6937 14.6947 10.9071 14.8236 11.1326C15.3338 12.0252 14.9929 12.8614 13.6709 14.1785L13.5451 14.306C13.3477 14.4962 13.1633 14.6325 12.8924 14.7611C12.4376 14.977 11.9004 15.0584 11.2761 14.9716C9.7378 14.7577 7.78675 13.5439 5.31457 11.0723C5.11332 10.8712 4.92058 10.6739 4.73615 10.4804L4.3783 10.0984C1.02506 6.45527 0.729238 4.21729 2.10343 2.81371L2.19246 2.72527ZM5.27092 2.85399C5.05373 2.63986 4.89595 2.50933 4.75686 2.42935C4.44917 2.25241 4.11698 2.3272 3.50218 2.85636L3.309 3.02894C3.2753 3.06004 3.24084 3.09233 3.20557 3.12583L2.98405 3.34158L2.96409 3.36652L2.81392 3.51739C2.45102 3.88807 2.27912 4.34047 2.42725 5.11849C2.67032 6.39517 3.78293 8.12706 6.02158 10.3651C8.35417 12.6971 10.1314 13.8028 11.4139 13.9811C12.1615 14.0851 12.5428 13.9041 12.9317 13.5056L13.2282 13.2064C13.3673 13.0608 13.4861 12.9289 13.5865 12.8084L13.7233 12.636C14.0731 12.1701 14.1051 11.8906 13.9555 11.6289C13.8986 11.5293 13.8158 11.4202 13.6952 11.2867L13.5317 11.1141L13.435 11.0172L12.4142 10.0315C12.073 9.71692 11.8399 9.67229 11.486 9.76672L11.3838 9.79611L10.9609 9.93966C9.73417 10.3359 8.84918 10.1437 7.54594 8.84083C6.19618 7.49141 6.03788 6.59029 6.49013 5.29282L6.51914 5.20945L6.59937 4.96773L6.6388 4.81366C6.70874 4.47835 6.62889 4.24456 6.26844 3.88405L6.21896 3.83418L5.27092 2.85399Z" fill="white" />
                    </svg>
                    <a class="panel_p" href="/profile.php">Главная</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="19" viewBox="0 0 3 19" fill="none">
                        <circle cx="1.5" cy="1.5" r="1.5" fill="white" />
                        <circle cx="1.5" cy="9.5" r="1.5" fill="white" />
                        <circle cx="1.5" cy="17.5" r="1.5" fill="white" />
                    </svg>
                </button>
                <button class="btn btn_panel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <g clip-path="url(#clip0_202_4795)">
                            <path opacity="0.4" d="M5.035 11.3322C4.76344 11.0606 4.905 11.1372 4.25 10.9619C3.95281 10.8822 3.69156 10.7291 3.45531 10.5456L2.0375 14.0219C1.90031 14.3584 2.15656 14.7241 2.51969 14.7103L4.16625 14.6475L5.29875 15.8438C5.54875 16.1075 5.9875 16.0253 6.12469 15.6888L7.75125 11.7006C7.4125 11.8894 7.03656 12 6.64781 12C6.03844 12 5.46594 11.7628 5.035 11.3322ZM13.9625 14.0219L12.5447 10.5456C12.3084 10.7294 12.0472 10.8822 11.75 10.9619C11.0916 11.1381 11.2359 11.0613 10.965 11.3322C10.5341 11.7628 9.96125 12 9.35188 12C8.96313 12 8.58719 11.8891 8.24844 11.7006L9.875 15.6888C10.0122 16.0253 10.4513 16.1075 10.7009 15.8438L11.8338 14.6475L13.4803 14.7103C13.8434 14.7241 14.0997 14.3581 13.9625 14.0219ZM10.2188 10.625C10.6963 10.1391 10.7509 10.1809 11.4309 9.99563C11.865 9.87719 12.2044 9.53188 12.3206 9.09001C12.5544 8.20251 12.4938 8.3097 13.1316 7.66032C13.4494 7.33688 13.5734 6.86532 13.4572 6.42345C13.2238 5.53657 13.2234 5.66032 13.4572 4.77251C13.5734 4.33063 13.4494 3.85907 13.1316 3.53563C12.4938 2.88626 12.5544 2.99313 12.3206 2.10595C12.2044 1.66407 11.865 1.31876 11.4309 1.20032C10.5597 0.962508 10.6647 1.0247 10.0263 0.375008C9.70844 0.0515703 9.245 -0.0749922 8.81094 0.0434453C7.94 0.280945 8.06156 0.281258 7.18906 0.0434453C6.755 -0.0749922 6.29156 0.0512578 5.97375 0.375008C5.33594 1.02438 5.44094 0.962508 4.56938 1.20032C4.13531 1.31876 3.79594 1.66407 3.67969 2.10595C3.44625 2.99313 3.50656 2.88626 2.86875 3.53563C2.55094 3.85907 2.42656 4.33063 2.54313 4.77251C2.77656 5.65876 2.77688 5.53501 2.54313 6.42313C2.42688 6.86501 2.55094 7.33657 2.86875 7.66032C3.50656 8.3097 3.44594 8.20251 3.67969 9.09001C3.79594 9.53188 4.13531 9.87719 4.56938 9.99563C5.26875 10.1863 5.32094 10.1563 5.78125 10.625C6.19469 11.0459 6.83875 11.1213 7.33563 10.8069C7.53432 10.6807 7.76481 10.6138 8.00016 10.6138C8.23551 10.6138 8.466 10.6807 8.66469 10.8069C9.16125 11.1213 9.80531 11.0459 10.2188 10.625ZM5.05188 5.49876C5.05188 3.84157 6.37188 2.49813 8 2.49813C9.62813 2.49813 10.9481 3.84157 10.9481 5.49876C10.9481 7.15595 9.62813 8.49938 8 8.49938C6.37188 8.49938 5.05188 7.15595 5.05188 5.49876Z" fill="#9FA2B4" />
                        </g>
                        <defs>
                            <clipPath id="clip0_202_4795">
                                <rect width="16" height="16" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <a class="panel_p" href="/pages/manual.php">Инструкции</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="19" viewBox="0 0 3 19" fill="none">
                        <circle cx="1.5" cy="1.5" r="1.5" fill="white" />
                        <circle cx="1.5" cy="9.5" r="1.5" fill="white" />
                        <circle cx="1.5" cy="17.5" r="1.5" fill="white" />
                    </svg>
                </button>
                <button class="btn btn_panel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path opacity="0.4" d="M2.4 7.20002C3.2825 7.20002 4 6.48252 4 5.60002C4 4.71752 3.2825 4.00002 2.4 4.00002C1.5175 4.00002 0.8 4.71752 0.8 5.60002C0.8 6.48252 1.5175 7.20002 2.4 7.20002ZM13.6 7.20002C14.4825 7.20002 15.2 6.48252 15.2 5.60002C15.2 4.71752 14.4825 4.00002 13.6 4.00002C12.7175 4.00002 12 4.71752 12 5.60002C12 6.48252 12.7175 7.20002 13.6 7.20002ZM14.4 8.00002H12.8C12.36 8.00002 11.9625 8.17753 11.6725 8.46502C12.68 9.01753 13.395 10.015 13.55 11.2H15.2C15.6425 11.2 16 10.8425 16 10.4V9.60003C16 8.71753 15.2825 8.00002 14.4 8.00002ZM8 8.00002C9.5475 8.00002 10.8 6.74752 10.8 5.20002C10.8 3.65252 9.5475 2.40002 8 2.40002C6.4525 2.40002 5.2 3.65252 5.2 5.20002C5.2 6.74752 6.4525 8.00002 8 8.00002ZM9.92 8.80002H9.7125C9.1925 9.05002 8.615 9.20003 8 9.20003C7.385 9.20003 6.81 9.05002 6.2875 8.80002H6.08C4.49 8.80002 3.2 10.09 3.2 11.68V12.4C3.2 13.0625 3.7375 13.6 4.4 13.6H11.6C12.2625 13.6 12.8 13.0625 12.8 12.4V11.68C12.8 10.09 11.51 8.80002 9.92 8.80002ZM4.3275 8.46502C4.0375 8.17753 3.64 8.00002 3.2 8.00002H1.6C0.7175 8.00002 0 8.71753 0 9.60003V10.4C0 10.8425 0.3575 11.2 0.8 11.2H2.4475C2.605 10.015 3.32 9.01753 4.3275 8.46502Z" fill="#9FA2B4" />
                    </svg>
                    <a class="panel_p" href="/pages/contacts.php">Контакты</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="19" viewBox="0 0 3 19" fill="none">
                        <circle cx="1.5" cy="1.5" r="1.5" fill="white" />
                        <circle cx="1.5" cy="9.5" r="1.5" fill="white" />
                        <circle cx="1.5" cy="17.5" r="1.5" fill="white" />
                    </svg>
                </button>
                <button class="btn btn_panel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path opacity="0.4" d="M2.4 7.20002C3.2825 7.20002 4 6.48252 4 5.60002C4 4.71752 3.2825 4.00002 2.4 4.00002C1.5175 4.00002 0.8 4.71752 0.8 5.60002C0.8 6.48252 1.5175 7.20002 2.4 7.20002ZM13.6 7.20002C14.4825 7.20002 15.2 6.48252 15.2 5.60002C15.2 4.71752 14.4825 4.00002 13.6 4.00002C12.7175 4.00002 12 4.71752 12 5.60002C12 6.48252 12.7175 7.20002 13.6 7.20002ZM14.4 8.00002H12.8C12.36 8.00002 11.9625 8.17753 11.6725 8.46502C12.68 9.01753 13.395 10.015 13.55 11.2H15.2C15.6425 11.2 16 10.8425 16 10.4V9.60003C16 8.71753 15.2825 8.00002 14.4 8.00002ZM8 8.00002C9.5475 8.00002 10.8 6.74752 10.8 5.20002C10.8 3.65252 9.5475 2.40002 8 2.40002C6.4525 2.40002 5.2 3.65252 5.2 5.20002C5.2 6.74752 6.4525 8.00002 8 8.00002ZM9.92 8.80002H9.7125C9.1925 9.05002 8.615 9.20003 8 9.20003C7.385 9.20003 6.81 9.05002 6.2875 8.80002H6.08C4.49 8.80002 3.2 10.09 3.2 11.68V12.4C3.2 13.0625 3.7375 13.6 4.4 13.6H11.6C12.2625 13.6 12.8 13.0625 12.8 12.4V11.68C12.8 10.09 11.51 8.80002 9.92 8.80002ZM4.3275 8.46502C4.0375 8.17753 3.64 8.00002 3.2 8.00002H1.6C0.7175 8.00002 0 8.71753 0 9.60003V10.4C0 10.8425 0.3575 11.2 0.8 11.2H2.4475C2.605 10.015 3.32 9.01753 4.3275 8.46502Z" fill="#9FA2B4" />
                    </svg>
                    <a class="panel_p" href="/pages/support.php">Техподдержка</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="19" viewBox="0 0 3 19" fill="none">
                        <circle cx="1.5" cy="1.5" r="1.5" fill="white" />
                        <circle cx="1.5" cy="9.5" r="1.5" fill="white" />
                        <circle cx="1.5" cy="17.5" r="1.5" fill="white" />
                    </svg>
                </button>
                <button class="btn btn_panel">
                    <a class="panel_p" href="../vendor/logout.php" role="button">Выход из личного кабинета</a>
                </button>
            </div>
        </div>
        <div class="header">
            <div class="header_panel">
                <h2 class="header_h2"><?= $_SESSION['user']['full_name'] ?>,<br>добро пожаловать в раздел техподдержки!</h2>
                <h3 class="header_h3">Связаться с нами:<br>mail@mail.com</h3>
            </div>

            <div class="contact_form_area">
                <h3>Для связи с командой техподдержки заполните форму:</h3>
                <form id="formid">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="NameF" name="NameF" placeholder="Ваше имя">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <input type="email" class="form-control" id="EmailF" name="EmailF" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea class="form-control" id="MessageF" name="MessageF" rows="3" placeholder="Ваше сообщение"></textarea>
                            </div>
                        </div>
                        <div class="form_btn_area text-center">
                            <button type="submit" onclick="submitForm(event)" id="" class="btn_support">Отправить</button>
                        </div>
                    </div>
                    <h2 class="formid_h2">Мы постараемся ответить Вам в кратчайшие сроки!</h2>
                </form>


            </div>




            <div class="header_block4">
                <img class="header_block4_img" src="/img-admin/time.jpg" alt="">
            </div>
        </div>

        <script src="/mail/notification.js"></script>
        <script src="/mail/feedback.js"></script>

</body>

</html>