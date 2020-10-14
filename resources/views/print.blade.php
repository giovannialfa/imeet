<html lang="en">

<head>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/print.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
</head>

<body class="text-center" style="display: block;">
    <div id="print_page_1">
        <div class="container print-container mt-5">
            <div class="row ">
                <div class="col-md-6">
                    <!-- <img class="chat-list-image" id="chat_guest_image"  alt="" style="width: 100%; height: 100%;"> -->
                    <div class="foto">
                        <img src="https://firebasestorage.googleapis.com/v0/b/ivisitor-95eb1.appspot.com/o/guests%2F1600682515311?alt=media&token=bf7bb7c5-b440-4ce4-8de4-f80ee1fe2751" alt="" style="width: 100px;height: 100px;">
                    </div>

                    <div class="nama d-flex justify-content-start" style="width: 149px; height: 33px; font-style: normal;font-weight: 600;font-size: 24px;line-height: 33px;margin-top: 10px;">
                        Nabilla Izzati
                    </div>
                    <div class="nomor d-flex justify-content-start" style="width: 100%;height: 19px;margin-top: 8px;font-style: normal;font-weight: normal;font-size: 14px;">
                        081154653985
                    </div>
                    <div class="nomor d-flex justify-content-start" style="width: 100%;height: 19px;margin-top: 8px;font-style: normal;font-weight: normal;font-size: 14px;">
                        Incredible inc
                    </div>
                    <div class="email-print d-flex justify-content-start" style="width: 100%;height: 19px;margin-top: 8px;font-style: normal;font-weight: normal;font-size: 14px;line-height: 19px;">
                        Nabillaizzati33@gmail.com
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="data d-flex justify-content-start" style="margin-top: 28px;width: 100%;height: 16px;font-style: normal;font-weight: 600;font-size: 12px;line-height: 16px;">
                        Tipe Pengunjung
                    </div>
                    <div class="isi d-flex justify-content-start" style="margin-top: 8px;width: 100%;  height: 22px;font-style: normal; font-weight: normal;font-size: 16px;line-height: 22px;display: flex;align-items: center;">
                        Visitor
                    </div>
                    <div class="data d-flex justify-content-start" style="margin-top: 28px;width: 100%;height: 16px;font-style: normal;font-weight: 600;font-size: 12px;line-height: 16px;">
                        Gedung
                    </div>
                    <div class="isi d-flex justify-content-start" style="margin-top: 8px;width: 100%;  height: 22px;font-style: normal; font-weight: normal;font-size: 16px;line-height: 22px;display: flex;align-items: center;">
                        Graha Kemenpora
                    </div>
                    <div class="data d-flex justify-content-start" style="margin-top: 28px;width: 100%;height: 16px;font-style: normal;font-weight: 600;font-size: 12px;line-height: 16px;">
                        Mengunjungi
                    </div>
                    <div class="row ">
                        <div class="col-md-2">
                            <div class="foto-visit" style="margin-top: 12 px;width: 38px;height: 38px;border-radius: 4px;    background: url(.png), #c4c4c4;">
                                <img src="{{ asset('asset/icon/visit.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="isi d-flex justify-content-start" style="margin-top: 8px;width: 100%;  height: 22px;font-style: normal; font-weight: normal;font-size: 16px;line-height: 22px;display: flex;align-items: center;">
                                Santo Pantek
                            </div>
                            <div class="data d-flex justify-content-start" style="margin-top: 3px;width: 100%;height: 16px;font-style: normal;font-weight: 600;font-size: 12px;line-height: 16px;">
                                Deputi 1
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('#print_page_1').ready(function() {
        printFunc(jQuery('#print_page_1').html())

        // window.print();
        // return false;
        // var prtContent = document.getElementById("print_page_1");
        // var WinPrint = window.open('', '', 'width=560px,height=280px');
        // WinPrint.document.write(prtContent.innerHTML);
        // WinPrint.document.close();
        // WinPrint.focus();
        // WinPrint.print();
        // WinPrint.close();

        // button.classList.remove('d-none')
    });

    function printFunc(data) {
        console.log(data)
        // var prtContent = document.getElementById("print_page_1");
        var WinPrint = window.open('', '', 'width=560px,height=280px');
        WinPrint.document.write('<html><head><title></title>');
        WinPrint.document.write('<link rel="stylesheet" href="{{ asset("css/app.css") }}">');
        WinPrint.document.write('<link rel="stylesheet" href="../../public/css/print.css" type="text/css">');
        WinPrint.document.write('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">');
        WinPrint.document.write('<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">');
        WinPrint.document.write('</head><body>');
        WinPrint.document.write(data);
        WinPrint.document.write('</body></html>');
        WinPrint.document.close();
        WinPrint.focus();
        setTimeout(function() {
            WinPrint.print();
        }, 2500);
        // WinPrint.close();   
        return false;
    }
</script>

</html>