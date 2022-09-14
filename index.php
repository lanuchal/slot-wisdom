<?php
include 'includes/configImgs.php';
include 'includes/configLinks.php';
error_reporting(0);

$p = $_GET['page'];
$gg;
if ($p == 1) {
    $gg = 1;
} elseif ($p == 2) {
    $gg = 2;
} elseif ($p == 3) {
    $gg = 3;
} else {
    $gg = 0;
}

?>
<!doctype html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet' />
    <!-- Bootstrap CSS -->
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link rel='icon' type='image/x-icon' href='./assets/imgs/logo.png'>
    <!-- <link href = '/includes/styles.css' rel = 'stylesheet'> -->
    <link rel='stylesheet' href='./includes/styles.css' crossorigin='anonymous'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title><?php echo $name_web ?></title>
</head>

<body>
    <div class='body-page position-relative'>
        <?php include 'pages/page_slide.php'; ?>
        <div class="img-fix2 text-center">
            <a href=<?php echo $link_img_star3 ?> target="_blank">
                <img class="star2 cur-pointer" src=<?php echo $img_star2 ?> alt=""></a>
        </div>
        <div class='container-md p-0'>
            <div class='row m-0 '>
                <div class="col-md-2">
                    <div class="d-flex box-title align-items-center">
                        <i class="bi-text-center curcer" id="o-menu-left" onclick="openMenubar()"></i>
                        <i class="bi-x-lg curcer" style="display:none;" id="c-menu-left"></i>
                        <a href="<?php echo $link_home ?>">
                            <img class="d-block h-100 ms-2" src=<?php echo $img_logo ?> alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-7"></div>
                <div class="col-md-1" style="float:none;margin:auto;">
                    <a href=<?php echo $link_sign_in; ?> class="rounded-pill">
                        <div class="p-2">
                            เข้าสู่ระบบ
                        </div>
                    </a>
                </div>
                <div class="col-md-2" style="float:none;margin:auto;">
                    <a href=<?php echo $link_sign_in; ?>>
                        <div class="btn-sign-up p-2">
                            สมัครสมาชิก
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center p-5">
                    <img class="d-block mx-auto mt-5" src=<?php echo $img_logo ?> alt="" width="250px">
                    <div class="px-5 mt-2">
                        <h3><strong class="base-color">OVERGAMECLUB</strong> อันดับหนึ่ง No.1</h3>
                        <span>OVERGAMECLUB ฝาก-ถอนออโต้ รองรับระบบ AUTO
                            สมัครง่ายไม่ต้องจำยูสเซอร์เปิดบริการตลอด24ชม</span>
                    </div>
                    <a href="#" class="btn btn-outline-primary mt-4 btn-lg">สมัครสมาชิก</a>
                </div>
                <div class="col-md-6 p-5">
                    <img class="d-block w-100 " src=<?php echo $img_pagg1_1; ?> alt="">
                </div>
            </div>
        </div>
        <hr class="x-hr">
        <div class="container-md">
            <div class="row">
                <div class="col-md-3 text-center p-2">
                    <div class="m-1">
                        <img src=<?php echo $img_pagg1_2; ?> alt="">
                    </div>
                    <strong>ฝากถอน Auto 100%</strong><br>
                    <span>ฝาก-ถอน ออโต้ 3 วินาที เจ้าเดียวในไทยระบบใหม่ล่าสุด!</span>
                </div>
                <div class="col-md-3 text-center p-2">
                    <div class="m-1">
                        <img src=<?php echo $img_pagg1_3; ?> alt="">
                    </div>
                    <strong>ฝากไม่มีขั้นต่ำ</strong><br>
                    <span>ฝากเท่าไหร่ก็ได้ไม่มีขั้นต่ำ ถอนขั้นต่ำ 100บาท เกมสล็อตครบทุกค่าย</span>
                </div>
                <div class="col-md-3 text-center p-2">
                    <div class="m-1">
                        <img src=<?php echo $img_pagg1_4; ?> alt="">
                    </div>
                    <strong>ความมั่นคง</strong><br>
                    <span>เท่าไหร่ก็จ่ายไม่มีลิมิตต่อวัน</span>
                </div>
                <div class="col-md-3 text-center p-2">
                    <div class="m-1">
                        <img src=<?php echo $img_pagg1_5; ?> alt="">
                    </div>
                    <strong>ความหลากหลาย</strong><br>
                    <span>มีเกมให้เลือกหลากหลาย จากค่ายระดับโลก</span>
                </div>
            </div>
        </div>
        <hr class="x-hr">
        <div class="bg-xx">
            <div class="container-md mt-2 ">
                <div class="row px-5">
                    <div class="col-md-6 p-2" style="float:none;margin:auto;">
                        <img src=<?php echo $img_pagg1_6; ?> alt="" class="d-block w-100">
                    </div>
                    <div class="col-md-6 p-2" style="float:none;margin:auto;">
                        <div class="text-center">
                            <img src=<?php echo $img_logo; ?> alt="" class="d-block mx-auto" width="200px">
                        </div>
                        <strong class="base-color">OVERGAMECLUB เว็บที่ให้บริการคาสิโนออนไลน์เต็มรูปแบบ คาสิโนสด สล็อตออนไลน์
                            บาคาร่าสด ยิงปลา แทงบอล ​</strong><br>
                        <span>แหล่งรวมบริการเกมสล็อตออนไลน์ ที่กำลังมาแรงในปี 2022 สมัครสมาชิกใหม่ รับโบนัสแรกเข้าฟรี 100% มีเกมให้เลือกเล่นมากกว่า 1,000 เกม มาพร้อมการเติมเงิน ฝากถอน ผ่านระบบอัตโนมัติ ที่มีเจ้าหน้าที่คอยให้บริการตลอด 24 ชั่วโมง</span>

                    </div>
                    <div class="col-md-12 text-center mt-0 mb-2">
                        <a href="#" class="btn btn-outline-primary mt-4 btn-lg">บทความ</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-md">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="#" class="btn btn-outline-primary mt-4 btn-md px-4">บทความทั้งหมด</a>
                    slide
                </div>
                <div class="cool-md-12 text-center">
                    <img src=<?php echo $img_logo; ?> alt="" class="d-block mx-auto" width="200px">
                </div>
                <h2><strong class="base-color">OVERGAMECLUB คาสิโนออนไลน์ แจกเครดิตฟรี เกมคาสิโน</strong></h2>
                <br>
                <span> <strong>เว็บคาสิโนออนไลน์ที่ดีที่สุด</strong> ในตอนนี้ต้องเว็บนี้เลย <strong>OVERGAMECLUB</strong> เพราะเราคือ
                    คาสิโนออนไลน์แจกเครดิตฟรี ที่เรามั่นใจว่าท่านที่เข้ามาเล่นต้องประทับใจอย่างแน่นอน
                    วิธีการได้โบนัสหรือเครดิตฟรี จากเราเพียงแค่ให้คุณเข้ากลุ่มร่วมเล่นเกมคาสิโน
                    กับเราและคอยติดตามกิจกกรมการแจกเงินต่าง ๆ ได้ในเพจหรือไลน์ เครดิตจากเรานั้นเป็นเงินจริงๆ
                    ที่ให้คุณได้นำไปเล่นเกมคาสิโนในเว็บเราต่อ สามารถถอนเงินออกได้แน่นอน
                    เพราะเรามีระบบอัตโนมัติพร้อมให้บริการตลอด 24 ชั่วโมง</span>
                <br>
                <h2 class="mt-2"><strong class="base-color">เล่นเกมผ่าน เว็บตรงคาสิโน มีเกมให้เลือกหลากหลาย</strong></h2>
                <span>เว็บเล่นเกมคาสิโนออนไลน์แห่งปี 2022 เรามีให้คุณเลือกมากมายหลากหลายเกม ตังอย่างเช่น
                    บาคาร่า สล็อต หวย แทงบอล เป็นต้น โดยแต่ละเกม ที่เราอยากจะนำเสนอนั้นเป็น
                    เป็นเกมที่เล่นได้ง่าย ๆ เข้าใจไม่ได้ยากเพราะว่า คาสิโนออนไลน์ นั้นออกแบบมา
                    เพื่อให้ง่ายต่อการเข้าถึงจากทุกแพลตฟอร์มได้อยู่แล้ว และเว็บของเราเป็นเว็บคาสิโนตรง
                    ที่พร้อมนำเสนอเกมพนัน ให้คุณได้เล่นอย่างครบครัน อีกทั้ยังมีบริการติดต่อสอบถามได้ตลอด 24 ชม.
                    ผ่านทาง <a href="#"><strong> @ovgth</strong></a> ของเราได้ทันที
                    เมื่อท่านพบปัญหาภายในเว็บไซต์ของเรา
                    <a href="#"><strong>สมัครสมาชิก</strong></a>
                </span>
            </div>
            <div class="row mt-2">
                <div class="col-md-5 p-4" style="float:none;margin:auto;">
                    <div class="px-5"><img src=<?php echo $img_pagg1_7; ?> alt="" class="d-block w-100"></div>

                </div>
                <div class="col-md-7" style="float:none;margin:auto;">
                    <h3><strong>ทำไมถึงต้องเล่นกับเรา?</strong></h3>
                    <div class="d-flex align-items-center mt-2">
                        <img src=<?php echo $img_pagg1_8; ?> alt="">&emsp;
                        เว็บของเรามีระบบอัตโนมัติสามารถสมัครได้ด้วยตัวเองโดยไม่ต้องผ่านแอดมิน
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <img src=<?php echo $img_pagg1_8; ?> alt="">&emsp;
                        เล่นตรงกับบริษัทไม่ผ่านเอเย่นต์
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <img src=<?php echo $img_pagg1_8; ?> alt="">&emsp;
                        การเงินมั่นคง จ่ายเร็ว จ่ายไว จ่ายไม่อั้น
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <img src=<?php echo $img_pagg1_8; ?> alt="">&emsp;
                        บริการตลอด 24 ชั่งโมง
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <h2><strong>เว็บคาสิโนออนไลน์ครบวงจร แจกเครดิตฟรี</strong></h2>
                    <br><span>
                        เว็บคาสิโนออนไลน์ที่กำลังมาแรงที่สุดในตอนนี้ ต้องยกให้เว็บนี้เลย เพราะเว็บนี้เป็นเว็บ คาสิโนออนไลน์ครบวงจร
                        แจกเครดิตฟรี มีเกมคาสิโนยอดฮิตมาไว้ให้ทุกท่านได้เลือกเล่นอย่างหลากหลาย
                        รับรองได้ว่าทุกท่านที่ได้เข้ามาเล่นจะต้องประทับใจอย่างแน่นอน
                        เพียงแค่ท่านกดเข้ามาสมัครสมาชิกที่เว็บของเรา มาร่วมสนุกกับเว็บของเรา สมัครสมาชิกตอนนี้รับเครดิตฟรีทันที
                    </span><br><br>
                    <span>
                        ถ้าหากว่าท่านกำลังสนใจ คาสิโนออนไลน์ครบวงจร แจกเครดิตฟรี มาสมัครสมาชิกที่เว็บนี้
                        มีเกมคาสิโนยอดนิยมมาให้ทุกท่านได้เลือกเล่นอย่างมากมาย ไม่ว่าจะเป็นทั้ง บาคาร่า สล็อต แทงบอล เกมยิงปลา
                        เสือมังกร รูเล็ต ไฮโล ป๊อกเด้ง และยังมีเกมเดิมพันอื่นๆอีกมากมายให้ทุกท่านได้เลือกเล่นอีกด้วย
                        หรือว่าท่านไหนที่ชื่นชอบการแทงหวย เว็บของเราก็มีให้ท่านได้เลือกแทง ไม่ว่าจะเป็น หวยไทย หวยลาว หวยยี่กี หรือ
                        หวยฮานอย ท่านสามารถเลือกเล่นได้หมด ครบวงจร เว็บของเราได้จัดหามาไว้ให้ทุกท่านหมดแล้ว
                    </span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8" style="float:none;margin:auto;">
                    <h2><strong>พร้อมรับทุกโปรโมชั่นเด็ด ๆ มากมาย</strong></h2><br>
                    <span>overgameclub คาสิโนออนไลน์ ในเว็บของเรานั้นมั่นใจได้ว่าจะต้องถูกใจสมาชิกทุกท่านอย่างแน่นอน
                        เพราะว่าเว็บของเราได้นำเกมเดิมพันยอดนิยมอย่างเช่น สล็อต บาคาร่า หรือ เกมยิงปลา และรวมถึงเกมเดิมพันสายกีฬาก็คือ
                        แทงบอล และยังมีเกมเดิมพันกีฬาอื่นๆอีกด้วย เว็บของเราสามารถเดิมพันได้ตลอด 24 ชั่วโมง
                        เชื่อได้เลยว่าได้เดิมพันกับเว็บของเราราคาดีกว่าที่อื่นแน่นอน บอกได้คำเดียวว่าสมัครเว็บนี้คุ้มแน่นอน
                        เพราะเว็บของเราเป็น คาสิโนออนไลน์ครบวงจร แจกเครดิตฟรี
                        บอกได้เลยว่าถูกใจสมาชิกทุกท่านอย่างแน่นอน ทางเข้า</span>
                </div>
                <div class="col-md-4" style="float:none;margin:auto;">
                    <img src=<?php echo $img_pagg1_9; ?> alt="" class="d-block w-100">
                </div>
            </div>
        </div>
        <hr class="x-hr mt-3">
        <div class="container-md mt-5">
            <div class="row box-border-page1">
                <div class="col-md-7" style="float:none;margin:auto;">
                    <h2><strong class="base-color">OVERGAMECLUB</strong></h2><br>
                    <span>สมัครคาสิโนปอยเปตออโต้ เกมส์สล็อตออนไลน์ เติมทรู บาคาร่า เติมผ่านวอเลท UFASLOT356
                        เราคือผู้ให้บริการเว็บ แทงบอลออนไลน์ และเดิมพัน คาสิโนสด สล็อตออนไลน์ ป๊อกเด้ง
                        ในรูปแบบครบวงจรตามหลักต่างประเทศ วิธีการเติมเงิน ผ่านทรูวอลเล็ต ออโต้ Joker UFASLOT356
                        918KISS PUSSY888 PGSLOT สล็อตออนไลน์ บริการผ่าน True money เล่นไม่มีขั้นต่ำ เกมสล็อต ผ่านมือถือ
                        เราเปิดให้บริการมาอย่างยาวนาน 10ปี มีให้เลือกเล่นมากมาย อาทิเช่น SAGAMING SEXYBACCARAT
                        บาคาร่า แบล็คแจ็ค รูเล็ต เสือมังกร ไฮโล ไก่ชน ยิงปลา ไพ่ป๊อกเด้ง และ มวย
                        ในรูปแบบที่ปลอดภัยและมั่นคงข้อมูลของลูกค้าทุกท่านถูกเก็บเป็นความลับเล่นง่ายไม่ยากทุกแพทฟอร์มรองรับมือถือทุกชนิด
                        IOS Android ได้มาตรฐานระดับสากลและมีความน่าเชื่อถือสูง
                        รับประสบการณ์การพนันบนโลกออนไลน์แบบสมจริง</span>
                </div>
                <div class="col-md-5">
                    <img src=<?php echo $img_pagg1_10; ?> alt="" class="d-block w-100">
                </div>
            </div>
        </div>
        <hr class="x-hr mt-3">
        <div class="box-footer mt-1 p-2">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-center">
                    <?php for ($i = 1; $i <= 29; $i++) { ?>
                        <img class="d-block m-1" src='./assets/imgs/<?php echo $i; ?>.png' alt="" width="100px">
                    <?php
                    } ?>
                </div>
                <br>
                <p class="text-center">Copyright © <?php echo date("Y"); ?> <?php echo $name_title ?> . All Rights Reserved.</p>

            </div>
        </div>

    </div>



    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0<?php echo $name_title ?>7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script>
    <script>
        function myFunction1() {
            var x = document.getElementById("myDIV1");
            var y = document.getElementById("bt-myDIV1"); //+
            var z = document.getElementById("bt-myDIV2"); //-
            if (x.style.display === "none") {
                x.style.display = "block";
                y.style.display = "none";
                z.style.display = "block";
            } else {
                x.style.display = "none";
                y.style.display = "block";
                z.style.display = "none";
            }
        }
        // function id="sh-menu-left" onclick="myFunctionClose()"d-flex
        function myFunctionClose() {
            var b = document.getElementById("sh-menu-left");
            var o = document.getElementById("o-menu-left");
            var s = document.getElementById("menu-left");
            var c = document.getElementById("c-menu-left");

            // c-menu-left
            if (s.style.display === "none") {
                console.log("o")
            } else {

                setTimeout(function() {
                    s.style.display = "none";
                    s.style.transform = "translateX(0)";
                    b.style.width = "100%";
                }, 600);

                s.style.transform = "translateX(-15rem)";
                // s.style.display = "none";
                b.style.width = "140%";
                o.style.display = "block";
                c.style.display = "none";
            }
        }

        function openMenubar() {
            var s = document.getElementById("menu-left");
            var c = document.getElementById("c-menu-left");
            var o = document.getElementById("o-menu-left");

            if (s.style.display === "none") {
                s.style.display = "flex";
                c.style.display = "block";
                o.style.display = "none";
                console.log("o")
            } else {
                console.log("c")

            }
        }
    </script>

</body>

</html>