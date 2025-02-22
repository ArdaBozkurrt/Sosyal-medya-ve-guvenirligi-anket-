<?php
$host = 'localhost';
$dbname = 'anket';
$username = 'root';
$password = 'rootpassword';
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
  die('baglanti hatasi:' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $cinsiyet = $_POST['cinsiyet'];
  $yas = $_POST['yas'];
  $ogrenim = $_POST['bolum'];
  $soru1 = $_POST['soru1'];
  $soru2 = $_POST['soru2'];
  $soru3 = $_POST['soru3'];
  $soru4 = json_encode($_POST['soru4'], JSON_UNESCAPED_UNICODE);
  $soru5 = $_POST['soru5'];
  $soru6 = json_encode($_POST['soru6'], JSON_UNESCAPED_UNICODE);
  $soru7 = $_POST['soru7'];
  $soru8 = $_POST['soru8'];
  $soru9 = $_POST['soru9'];
  $soru10 = $_POST['soru10'];
  $soru11 = $_POST['soru11'];
  $soru12 = $_POST['soru12'];
  $soru13 = $_POST['soru13'];
  $soru14 = $_POST['soru14'];
  $soru15 = $_POST['soru15'];
  $soru16 = json_encode($_POST['soru16'], JSON_UNESCAPED_UNICODE);
  $soru17 = $_POST['soru17'];
  $soru18 = $_POST['soru18'];
  $soru19 = $_POST['soru19'];
  $soru20 = $_POST['soru20'];



  $sql = "INSERT INTO anketsonuc(cinsiyet,yas,ogrenim,soru1,soru2,soru3,soru4,soru5,soru6,soru7,soru8,soru9,soru10,soru11,soru12,soru13,soru14,soru15,
soru16,soru17,soru18,soru19,soru20)
 VALUES ('$cinsiyet','$yas','$ogrenim','$soru1','$soru2','$soru3','$soru4','$soru5','$soru6','$soru7','$soru8','$soru9','$soru10','$soru11',
 '$soru12','$soru13','$soru14','$soru15','$soru16','$soru17','$soru18','$soru19','$soru20')";
  $mysqli = new mysqli($host, $username, $password, $dbname);
  if ($mysqli->connect_error) {
    die(" Baglanti Hatası:" . $mysqli->connect_error);
  }
  if ($conn->query($sql) === TRUE) {
    echo "Kayit başarıyla eklendi.";
  } else {
    echo "Hata:" . $sql . "<br>" . $conn->error;
  }


  $conn->close();

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sosyal Medya Bağımlılığı ve Güvenirliliği</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        .button {
            display: inline-block;
            border-radius: 4px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }

        input[type='radio'] {
            border-radius: 50%;

            &:after {
                width: 19px;
                height: 19px;
                border-radius: 50%;
                background: var(--active-inner);
                opacity: 0;
                transform: scale(var(--s, .7));
            }

            &:checked {
                --s: .5;
            }
        }

        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #f6f7fb;
        }

        /* 
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        } */

        .steps {
            display: flex;
            justify-content: space-between;
            width: 100%;
            gap: 5px;
            overflow-x: scroll;
            padding: 10px 0;
        }

        .steps .circle {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 54px;
            width: 54px;
            color: #999;
            font-size: 22px;
            font-weight: 500;
            border-radius: 50%;
            background: #fff;
            border: 4px solid #e0e0e0;
            transition: all 200ms ease;
            transition-delay: 0s;
        }

        .steps .circle.active {
            transition-delay: 100ms;
            border-color: #4070f4;
            color: #4070f4;
        }

        .steps::-webkit-scrollbar {
            height: 8px;
        }

        .steps::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 4px;
        }

        .steps::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }

        .buttons {
            display: flex;
            gap: 20px;
        }

        .buttons button {
            padding: 8px 25px;
            background: #4070f4;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 16px;
            font-weight: 400;
            cursor: pointer;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
            transition: all 200ms linear;
        }

        .buttons button:active {
            transform: scale(0.97);
        }

        .buttons button:disabled {
            background: #87a5f8;
            cursor: not-allowed;
        }


        .question {
            display: flex;
            justify-content: center;
            border: #4070f4 3px;
            border-style: solid;
            padding: 10px;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 20px;
            margin-bottom: 20px;
            align-items: flex-start;

        }

        .question {
            display: none;
            text-align: center;
        }

        .question.active {
            display: block;
            transition: opacity 0.5s ease;
        }

        .topArea {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 75px !important;
            z-index: 99;
        }

        .infoArea {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 99;
            height: 50px;
        }

        .titleArea {
            padding-top: 60px;
        }

        h1 {
            font-size: 24px !important;
        }

        .nameArea {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container-fluid position-relative" style="height:100vh!important">
        <div class="header position-relative">
            <div class="infoArea d-flex flex-row justify-content-between">
                <div id="isim" class="nameArea text-dark font-weight-bold">
                    <span>Arda Bozkurt 231250030</span>
                    <br>
                    <span>Bilal Şahin 231250052</span>
                </div>
                <div id="tarih" class="text-primary"></div>
            </div>
            <div class="titleArea text-center">
                <h1 class="font-weight-bold">Sosyal Medya Bağımlılığı ve Güvenirliliği</h1>
                <div class="alert alert-info">
                    Not: Bu anket Araştırma Yöntem ve Teknikleri dersi kapsamında ödev amaçlı hazırlanmıştır.
                </div>
            </div>
        </div>
        <div class="content">
            <form method="POST" action="" autocomplete="off" id="surveyForm">
                <div class="stepsArea col-12">
                    <div class="steps">
                        <span class="circle col-auto active">Bilgi</span>
                        <?php
                        for ($i = 1; $i < 21; $i++) {
                            echo '<span class="circle col-auto">' . $i . '</span>';
                        }
                        ?>
                        <span class="circle col-auto">✓</span>
                    </div>
                </div>
                <div class="questions col-12 d-flex align-items-center justify-content-center my-md-3">
                    <div class="question active col-md-6 col-12">
                        <b> Cinsiyetiniz Nedir ?</b><br>


                        <input type="radio" name="cinsiyet" value="Erkek" required> Erkek
                        <input type="radio" name="cinsiyet" value="Kadın"> Kadın <br>
                        <p>&nbsp;</p>

                        <b> Öğrenim Durumunuz Nedir ?</b><br>

                        <input type="radio" name="bolum" value="Lise"> Lise
                        <input type="radio" name="bolum" value="Onlisans"> Ön Lisans
                        <input type="radio" name="bolum" value="Lisas">     
                        <input type="radio" name="bolum" value="Mezun"> Mezun<br>
                        <p>&nbsp;</p>
                        <b> Yaş Aralığınız Nedir ?</b><br>

                        <input type="radio" name="yas" value="14-18"> 14-18
                        <input type="radio" name="yas" value="19-23"> 19-23
                        <input type="radio" name="yas" value="24-27"> 24-27
                        <input type="radio" name="yas" value="28+"> 28+<br>


                    </div>
                    <div class="question">
                        <b>1. Günde kaç saat sosyal medya kullanıyorsunuz ?</b><br>

                        <input type="radio" name="soru1" value="0-3"> 0-3 saat
                        <input type="radio" name="soru1" value="3-6"> 3-6 saat<br>
                        <input type="radio" name="soru1" value="6-9"> 6-9 saat
                        <input type="radio" name="soru1" value="9 ve üstü">9 ve üstü saat<br>
                    </div>
                    <div class="question">
                        <b>2. Sosyal medya kullandıktan sonra kendinizi daha mutlu hissediyor musunuz ?</b><br>

                        <input type="radio" name="soru2" value="Evet"> Evet
                        <input type="radio" name="soru2" value="Hayır"> Hayır
                    </div>
                    <div class="question">
                        <b>3. Sosyal medyada düzenli olarak içerik paylaşıyor musunuz ?</b><br>

                        <input type="radio" name="soru3" value="Evet"> Evet
                        <input type="radio" name="soru3" value="Hayır"> Hayır
                    </div>
                    <div class="question">
                        <b>4. Sosyal medyayı ne amaçla kullanıyorsunuz ?</b><br>
                        <input type="checkbox" id="teknolojik" name="soru4[]" value="Mesajlaşmak">
                        <label for="Tür2">Mesajlaşmak</label>
                        <input type="checkbox" id="Gündem Takibi" name="soru4[]" value="Gündem Takibi">
                        <label for="Tür3">Gündem Takibi</label><br>
                        <input type="checkbox" id="Stalk" name="soru4[]" value="Stalk">
                        <label for="Tür1">Stalk</label>
                        <input type="checkbox" id="Paylaşım" name="soru4[]" value="Paylaşım">
                        <label for="Tür4">Paylaşım</label>
                    </div>
                    <div class="question">
                        <b>5. Sosyal medya gizlilik ayarlarınızı düzenli olarak kontrol ediyor musunuz ?</b><br>

                        <input type="radio" name="soru5" value="Evet"> Evet
                        <input type="radio" name="soru5" value="Hayır"> Hayır
                    </div>
                    <div class="question">
                        <b>6. Hangi hesapları takip etmeyi tercih ediyorsunuz ?</b><br>
                        <input type="checkbox" id="Eğlence" name="soru6[]" value="Eğlence">
                        <label for="Tür1">Eğlence</label>

                        <input type="checkbox" id="teknolojik" name="soru6[]" value="teknolojik">
                        <label for="Tür2">Teknolojik</label><br>
                        <input type="checkbox" id="bilimsel" name="soru6[]" value="bilimsel">
                        <label for="Tür3">Bİlimsel</label>
                        <input type="checkbox" id="haber" name="soru6[]" value="haber">
                        <label for="Tür1">Haber</label>
                    </div>
                    <div class="question">
                        <b>7. Sosyal medyayı haber almak için güvenilir bir kaynak olarak görüyor musunuz ?</b><br>

                        <input type="radio" name="soru7" value="Evet"> Evet
                        <input type="radio" name="soru7" value="Hayır"> Hayır
                    </div>
                    <div class="question">
                        <b>8. Sizce sosyal medya, zaman zaman stres kaynağı oluyor mu ?</b><br>
                        <input type="radio" name="soru8" value="Evet"> Evet
                        <input type="radio" name="soru8" value="Hayır"> Hayır
                    </div>
                    <div class="question">
                        <b>9. Paylaştığnız içeriklerin beğenilmesini önemsiyor musunuz ?</b><br>

                        <input type="radio" name="soru9" value="Evet"> Evet
                        <input type="radio" name="soru9" value="Hayır"> Hayır
                    </div>
                    <div class="question">
                        <tr>
                            <td bgcolor="#CCCCCC"><b>10. Sosyal medya üzerinden tanıştığınız kişilerle gerçek hayatta buluşmayı tercih
                                    ediyor musunuz ?
                                </b>
                            </td>
                            <td bgcolor="#CCCCCC"> <br>
                                <input type="radio" name="soru10" value="Evet"> Evet
                                <input type="radio" name="soru10" value="Hayır"> Hayır
                    </div>
                    <div class="question">
                        <b>11. Sosyal medyada yaptığınız paylaşımlar genellikle planlı mı, yoksa anlık mı ?</b><br>

                        <input type="radio" name="soru11" value="Planlı"> Planlı
                        <input type="radio" name="soru11" value="Anlık"> Anlık
                    </div>
                    <div class="question">
                        <b>12. Sosyal medya aracılığı ile toplumsal meseleler hakkında daha fazla bilgi sahibi olduğunuzu düşünüyor
                            musunuz ? ?</b><br>

                        <input type="radio" name="soru12" value="Evet"> Evet
                        <input type="radio" name="soru12" value="Hayır"> Hayır
                    </div>
                    <div class="question">
                        <b>13. Sosyal medya üzerinden kurduğunuz ilişkilerin gerçek hayattaki ilişkiler kadar değerli olduğunu
                            düşünüyor musunuz ?</b><br>

                        <input type="radio" name="soru13" value="Evet"> Evet
                        <input type="radio" name="soru13" value="Hayır"> Hayır
                    </div>
                    <div class="question">
                        <b>14. Sizce sosyal medya yüz yüze iletişiminizi olumsuz etkiliyor mu ?</b><br>

                        <input type="radio" name="soru14" value="Evet"> Evet
                        <input type="radio" name="soru14" value="Hayır"> Hayır
                    </div>
                    <div class="question">
                        <b>15. Sosyal medya üzerinden yeni trendleri takip etmek için sık sık platformları kontrol ediyor musunuz
                            ?</b><br>

                        <input type="radio" name="soru15" value="Evet"> Evet
                        <input type="radio" name="soru15" value="Hayır"> Hayır
                    </div>
                    <div class="question">
                        <b>16. Hangi tür içerikleri sosyal medyada paylaşmayı seviyorsunuz ? </b><br>

                        <input type="checkbox" id="seyahat" name="soru16[]" value="Seyahat">
                        <label for="seyahat">Seyahat</label>&nbsp;
                        <input type="checkbox" id="yemek" name="soru16[]" value="Yemek">
                        <label for="yemek">Yemek</label><br>
                        <input type="checkbox" id="alisveris" name="soru16[]" value="Alışveriş">
                        <label for="alisveris">Alışveriş</label>
                        <input type="checkbox" id="fotograf" name="soru16[]" value="Fotoğraf">
                        <label for="fotograf">Fotoğraf</label><br>
                    </div>
                    <div class="question">
                        <b>17. Sosyal medyada gördüğünüz reklamları dikkate alarak alışveriş yapıyor musunuz ?</b><br>
                        <input type="radio" name="soru17" value="Evet"> Evet
                        <input type="radio" name="soru17" value="Hayır"> Hayır

                    </div>
                    <div class="question">
                        <b>18. Sosyal medyada aktif bir katılımcı olduğunuzu düşünüyor musunuz ?</b><br>

                        <input type="radio" name="soru18" value="Evet"> Evet
                        <input type="radio" name="soru18" value="Hayır"> Hayır
                    </div>
                    <div class="question">
                        <b>19. Farklı kültürleri tanımak için sosyal medyayı kullanıyor musunuz ?</b><br>
                        <input type="radio" name="soru19" value="Evet"> Evet
                        <input type="radio" name="soru19" value="Hayır"> Hayır

                    </div>
                    <div class="question">
                        <b>20. Kendi içeriklerinizi yaratmayı sosyal medyada sıkça deniyor musunuz ?</b><br>

                        <input type="radio" name="soru20" value="Evet"> Evet
                        <input type="radio" name="soru20" value="Hayır"> Hayır
                    </div>
                    <div class="question">
                        <b>Anketimize Katıldığınız İçin Teşekkür Ederiz! </b><br>
                    </div>
                </div>
                <div class="buttons col-12 d-flex align-items-center justify-content-center">
                    <button id="prev" type="button" disabled>Geri</button>
                    <button id="next" type="button">İleri</button>
                    <button type="submit" id="submit" style="display:none;">Gonder</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        const circles = document.querySelectorAll(".circle");
        const buttons = document.querySelectorAll("button");
        const questions = document.querySelectorAll(".question");
        const stepsContainer = document.querySelector('.steps');
        const surveyForm = $('#surveyForm');
        const nextButton = $('#next');

        let currentStep = 0; 

        const updateSteps = (e) => {
            if (e.target.id === "next") {
                let isValid = validateAnswers(currentStep);
                if (!isValid) {
                    alert('Lütfen tüm soruları yanıtlayın.')
                    return;
                } else {
                    currentStep++; 
                }
            } else if (e.target.id === "prev") {
                currentStep--; 
            }

            currentStep = Math.max(0, Math.min(currentStep, questions.length - 1));




            questions.forEach((question, index) => {

                if (index === currentStep) {
                    question.classList.add("active");
                } else {
                    question.classList.remove("active");
                }
            });


            circles.forEach((circle, index) => {
                if (index <= currentStep) {
                    stepsContainer.scrollLeft = (circle.offsetLeft / 1.2);
                    circle.classList.add("active");
                } else {
                    circle.classList.remove("active");
                }
            });




            
            buttons[0].disabled = currentStep === 0; 
            buttons[1].disabled = currentStep === questions.length - 1; 

            if (currentStep === questions.length - 1) {

                document.getElementById("submit").style.display = "block";
                document.getElementById("next").style.display = "none";

            } else {
                document.getElementById("submit").style.display = "none";
                document.getElementById("next").style.display = "block";
            }
        };

        const validateAnswers = (index) => {
            let valid = true;
            let questions = $('.question');

            let question = $(questions[index]);
            let radios = question.find('input[type="radio"]');
            let checkboxes = question.find('input[type="checkbox"]');
            let isAnswered = false;

            console.log('index', index, question, radios, checkboxes)

            if (radios.length > 0) {
                radios.each(function() {
                    if ($(this).prop('checked')) {
                        isAnswered = true;
                    }
                })
            }

            if (checkboxes.length > 0) {
                checkboxes.each(function() {
                    if ($(this).prop('checked')) {
                        isAnswered = true;
                    }
                })
            }
            if (!isAnswered) {
                valid = false;
                question.addClass('error');
            } else {
                question.remove('error');
            }

            return valid;
        };
        buttons.forEach((button) => {
            button.addEventListener("click", updateSteps);
        });

        function getTurkishDate() {
            const günler = ["Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi"];
            const aylar = ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"];

            const tarih = new Date();

            const gün = günler[tarih.getDay()];
            const ay = aylar[tarih.getMonth()];
            const günNumarası = tarih.getDate();
            const yıl = tarih.getFullYear();

            return `${gün}, ${günNumarası} ${ay} ${yıl}`;
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('tarih').textContent = getTurkishDate();
        });
    </script>
</body>

</html>