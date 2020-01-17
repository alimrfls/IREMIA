@extends('layouts.app')
@section('content')
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            height: 100%;
            width: 100%;
            background: rgba(200,200,200,0.2);
        }
        .container-720 {
            max-width: 800px;
            margin: auto;
            background: #fff;
        }

        /* Float four columns side by side */
        .column {
            width: 100%;
            height: 100%;
            padding: 70px;
        }

        /* Remove extra left and right margins, due to padding *
        .row {margin: 0 -5px;}

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 18px;
            text-align: center;
            background-color: #f1f1f1;
        }
    </style>

    <div class="container-720">
        <div class="card">
            <div class="heading" style="background: #5cb85c; padding: 10px; margin-left:-20px; margin-right: -20px; box-shadow: 0 5px 10px -5px green;">
                <h2 style="text-align: center; color:white; width: 800px">Registrasi Berhasil</h2>
               {{-- <img src="https://techfest.org/2018/logo-main.png" alt="" style="height: 50px;">--}}
            </div>
            <main style="padding: 10px;">
                <br>
                <h4 style="color: black">
                    Selamat Anda Telah Berhasil Melakukan Pengisian Dokumen,
                    <br><br> Nomor registrasi anda adalah :
                <h3 style="text-align: center">
                    <br>
                    <div class="card">
                        <b>REG-001234</b>
                    </div>
                </h3>
                </h4>

                <p><i><br>
                        Kindly note that your registration is not yet complete.
                        To confirm your seat during Workshop, you need to do the payment of the workshop.
                        We urge you to pay as soon as possbile as payment (hence workshop registraion) will close after the seats are filled.
                    </i></p>
                <p>
                    To pay for the workshop, click on the &ldquo;pay now&rdquo; button below.
                </p>
                <p>
                    <a href="/dashboard" style="background: #5bc0de; color: white;font-weight: 700;padding: 15px;min-width: 220px;display: inline-block;text-align: center;border-radius: 8px;box-shadow: 0 5px 5px -3px rgba(247, 123, 0, 0.6588235294117647);font-size: 1.4em;">
                        SELESAI
                    </a>
                </p>
                <p>By paying for workshop you will also become eligible for availing the accommodation during Techfest.Once the payment is done, <a href="https://techfest.org/accommodation">click here</a> to register for accommodation.</p>
            </main>
            <footer style="padding:20px 10px 20px 10px;font-size: 0.9em;border-top:2px double #1f3f1f;">
                <p>
                    If you have any querries related to workshops, feel free to contact me at <a href="mailto:someone@example.com">someone@techfest.org</a>
                </p>
                <p>
                    <i>
                        For more information related to techfest, you can visit our website <a href="https://techfest.org">https://techfest.org</a> <br>
                        For latest updates, you can follow us at our social media platforms: <a href="https://www.facebook.com/iitbombaytechfest/">Facebook</a>,<a href="https://twitter.com/Techfest_IITB/">Twitter</a>, <a href="https://www.instagram.com/techfest_iitbombay/">Instagram</a>
                    </i>
                </p>
            </footer>
        </div>
    </div>



@endsection