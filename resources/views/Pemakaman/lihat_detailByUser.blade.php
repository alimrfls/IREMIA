@extends('layouts.app') @section('content')
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {
            margin: 0 -5px;
        }

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
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }

        .header {
            padding: 10px 30px;
            background: #bbc7c8;
            color: #1a1a1a;
        }

        .tab {
            overflow: hidden;
            border: 2px solid #1a1a1a;
            background-color: #f1f1f1;
        }

        .tab button {
            background-color: inherit;
            float: left;
            border: #1a1a1a;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
            font-variant: normal;
        }

        .tab button:hover {
            background-color: #ddd;
        }

        .tab button.active {
            background-color: #ccc;
        }

        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #1a1a1a;
            border-top: none;
            animation: fadeEffect 1s;
        }

        /* Fade in tabs */
        @-webkit-keyframes fadeEffect {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeEffect {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
    @if(Auth::check())
        @if(count($detailpemakaman)>0)
            @foreach($detailpemakaman as $detailpemakamans)
                <field>
                    <div class="container" id="information_pemakaman">
                        <br><br>
                        <div class="tab">
                            <button class="tablinks" onclick="openTab(event, 'informasi')" id="defaultOpen">
                                <strong style="color: black"> Informasi Pemakaman </strong>
                            </button>
                            <button class="tablinks" onclick="openTab(event, 'pemesanan')">
                                <strong style="color: black">Pemesanan IPTM</strong>
                            </button>
                            <button class="tablinks" onclick="openTab(event,'peraturan')">
                                <strong style="color: black">Peraturan IPTM</strong>
                            </button>
                        </div>

                        <div id="informasi" class="tabcontent">
                            <div class="card-header col-md-12">
                                <strong>INFORMASI DETAIL</strong>
                            </div>
                            <br><br>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data"
                                      class="form-horizontal">
                                    <div class="col-md-5">
                                        <img src="/images/pemakaman/{{$detailpemakamans->photoPemakaman}}" width="300px"
                                             height="250px">
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <strong style="color: black"> Nama Pemakaman : </strong>
                                        </div>
                                        <div class="col col-md-6">
                                            <p style="color: black">{{$detailpemakamans->namaPemakaman}}</p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <strong style="color: black"> Alamat Pemakaman : </strong>
                                        </div>
                                        <div class="col col-md-6">
                                            <p style="color: black">
                                                {{$detailpemakamans->alamatPemakaman}}
                                                ,{{$detailpemakamans->kotaPemakaman}}
                                                ,{{$detailpemakamans->provinsiPemakaman}}
                                                ,{{$detailpemakamans->kodeposPemakaman}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <strong style="color: black"> E-Mail Pemakaman : </strong>
                                        </div>
                                        <div class="col col-md-6">
                                            <p style="color: black">{{$detailpemakamans->emailPemakaman}}</p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <strong style="color: black"> Jumlah Makam : </strong>
                                        </div>
                                        <div class="col col-md-6">
                                            <p style="color: black">{{$detailpemakamans->jumlahPemakaman}}</p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <strong style="color: black"> Luas Pemakaman : </strong>
                                        </div>
                                        <div class="col col-md-6">
                                            <p style="color: black">{{$detailpemakamans->luasPemakaman}}</p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <strong style="color: black"> PIC Pemakaman : </strong>
                                        </div>
                                        <div class="col col-md-6">
                                            <p style="color: black">PIC Pemakaman</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div id="pemesanan" class="tabcontent">
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-row">
                                    <div class="col-md-12">
                                        <div class="card-header col-md-12">
                                            <strong>IPTM Perpanjangan</strong>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <br>
                                                <p style="color: black">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Accusantium adipisci animi,
                                                    commodi dolores ducimus ea facilis fuga, fugit id, ipsum modi natus
                                                    nulla
                                                    qui quis recusandae reprehenderit sed tenetur voluptate!
                                                </p>
                                            </div>
                                            <br><br><br>
                                            <div class="text-center">
                                                <a href="/formPerpanjangan/{{$detailpemakamans->pemakamanid}}"
                                                   class="btn btn-primary" type="button">
                                                    IPTM Perpanjangan
                                                </a>
                                            </div>
                                        </div>

                                        <div class="card-header col-md-12">
                                            <strong>IPTM Tumpangan</strong>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <br>
                                                <p style="color: black">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Accusantium adipisci animi, commodi dolores ducimus ea facilis fuga,
                                                    fugit id, ipsum modi natus nulla qui quis recusandae reprehenderit
                                                    sed tenetur voluptate!
                                                </p>
                                            </div>
                                            <br><br><br><br><br>
                                            <div class="text-center">
                                                <a href="/formTumpangan/{{$detailpemakamans->pemakamanid}}"
                                                   class="btn btn-primary" type="button">
                                                    IPTM Tumpangan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div id="peraturan" class="tabcontent">
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-row">
                                    <div class="col-md-12">
                                        <div class="card-header col-md-12">
                                            <strong>Peraturan IPTM</strong>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <br>
                                                <p style="color: black">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Accusantium adipisci animi, commodi dolores ducimus ea facilis fuga,
                                                    fugit id, ipsum modi natus nulla qui quis recusandae reprehenderit
                                                    sed tenetur voluptate!
                                                </p>
                                            </div>
                                            <br><br><br>
                                            {{--<div class="text-center">
                                                <a href="/izinPerpanjangan/{{$detailpemakamans->pemakamanid}}"
                                                   class="btn btn-primary" type="button">
                                                    IPTM Perpanjangan
                                                </a>
                                            </div>--}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </field>
            @endforeach
        @endif
    @else
        <h2>please Login First</h2>
    @endif

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
    </script>

@endsection