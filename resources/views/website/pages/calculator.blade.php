@extends('website.layout')

@section('title', trans('translates.calculator_title'))

@section('content')
    @include('website.components.banner', ['title' => trans('translates.calculator_title')])
    <div class="container">
        <div class="col-md-12">
            <div class="list blog pt-5 pb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="xif_derece">XİF MN üzrə kod</label>
                            <select name="say" id="xif_derece" class="form-control xif_derece">
                                <option value=""> seçin</option>
                                <option value="15"> 5806 20 000 0</option>
                                <option value="15"> 4107 99 900 0</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="invoys">Invoys</label>
                            <input type="text" id="invoys" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                   class="form-control form-input" name="vöen" maxlength="199" minlength="1" pattern=".*\S+.*" value="" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Valyuta</label>
                            <select name="say" id="invoys_valyuta" class="form-control ">
                                <option value="" disabled="" selected="">seçin</option>
                                <option value="1.7"> USD</option>
                                <option value="1.8883">EUR</option>
                                <option value="1.1683">AUD</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Daşınma xərci</label>
                            <input type="text" id="dasinma"
                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                   class="form-control form-input" name="vöen" placeholder="" maxlength="199"
                                   minlength="1" pattern=".*\S+.*" value="" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Valyuta</label>
                            <select name="say" id="dasinma_valyuta" class="form-control dasinma_valyuta ">
                                <option value="" disabled="" selected="">seçin</option>
                                <option value="1.7">USD</option>
                                <option value="1.8883">EUR</option>
                                <option value="1.1683">AUD</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Beynəlxalq gəmi razılaşması</label>
                            <select name="say" class="form-control fob ">
                                <option value="FOB">FOB</option>
                                <option value="CİF">CİF</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Əməliyyat xərci</label>
                            <select name="say" id="em_xerc" class="form-control em_xerc ">
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <button onclick="hesabla()" class="btn btn-primary text-uppercase">
                                Hesabla
                            </button>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div id="netice" style="display: none">
                            <table id="tblCustomers">

                                <tbody style="display: none">

                                <tr>
                                    <th>Kodu</th>
                                    <th>Hesablama balansı</th>
                                    <th>Tarif dərəcəsi(%)</th>
                                    <th>Məbləğ(AZN)</th>
                                    <th>OU</th>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td id="hesablama_esas"></td>
                                    <td></td>
                                    <td id="big_mantikli"></td>
                                    <td>01</td>
                                </tr>

                                <tr>
                                    <td>20</td>
                                    <td id="hesablama_esas_1"></td>
                                    <td id="xif_derece1"></td>
                                    <td id="iyirmi"></td>
                                    <td>01</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td id="otuziki"></td>
                                    <td>18</td>
                                    <td id="otuzikininfaizi"></td>
                                    <td>01</td>
                                </tr>
                                <tr>

                                    <td>75</td>
                                    <td id="mehsulsayi"></td>
                                    <td>0</td>
                                    <td id="mehsulsayifaiz"></td>
                                    <td> 01</td>
                                </tr>
                                <tr>

                                    <td>85</td>
                                    <td id="mehsulsayifaiz_1"></td>
                                    <td>18</td>
                                    <td id="mehsulsayifaizedv"></td>
                                    <td>01</td>
                                </tr>

                                </tbody>


                                <tbody style="background-color: floralwhite">
                                <tr>
                                    <th>Kodu</th>
                                    <th>Açıqlama</th>
                                    <th>Məbləğ (AZN)</th>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Mallara gömrük nəzarəti gömrük orqanlarının iş
                                        vaxtından kənar saatlarda və iş yerindən kənarda həyata
                                        keçirildikdə malların gömrük rəsmiləşdirilməsinə görə
                                        ikiqat məbləğdə gömrük yığımları
                                    </td>
                                    <td id="y_nolbir"></td>

                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>İdxal gömrük rüsumu</td>
                                    <td id="y_iyirmi"></td>

                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Əlavə dəyər vergisi</td>
                                    <td id="y_otuziki"></td>

                                </tr>
                                <tr>
                                    <td>75</td>
                                    <td>Elektron gömrük xidməti haqqı</td>
                                    <td id="y_yetmisbes"></td>

                                </tr>
                                <tr>
                                    <td>85</td>
                                    <td>Elektron gömrük xidməti üzrə Əlavə dəyər vergisi</td>
                                    <td id="y_seksenbes"></td>

                                </tr>
                                <tr>
                                    <td><b>Cəmi</b></td>
                                    <td id="yekunnn" style="font-weight: 900"><b></b></td>

                                </tr>
                                </tbody>
                            </table>
                            <a href="javascript:void(0)" class="download--button">Yüklə</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('scripts')
    <script>
        function hesabla() {


//hesablayaq_invyos

            var invoys_valyuta = $("#invoys_valyuta").children("option:selected").val();
            var invoys = $('#invoys').val();
            var invoys_cem = parseFloat(invoys_valyuta) * parseFloat(invoys);
            invoys_total = invoys_cem.toFixed(2);
            console.log(invoys_total)

//hesablayaq_dasinma
            var dasinma_valyuta = $("#dasinma_valyuta").children("option:selected").val();
            var dasinma = $('#dasinma').val();
            var dasinma_cem = parseFloat(dasinma_valyuta) * parseFloat(dasinma);
            dasinma_total = dasinma_cem.toFixed(2);

//invoys+dasinma

//plusdan sonraki

            var cemyoxla = $('#elave_invoys_plus_dasinma').html();


            var hesablama_ucun_esas = parseFloat(invoys_total) + parseFloat(dasinma_total) + parseFloat(cemyoxla);
            hesablama_total = hesablama_ucun_esas.toFixed(2);


            var hesablama_ucun_esas_1 = parseFloat(invoys_total) + parseFloat(dasinma_total);
            hesablama_total_1 = hesablama_ucun_esas_1.toFixed(2);

            $('#hesablama_esas').html(hesablama_total);

            $('#hesablama_esas_1').html(hesablama_total_1);


            if (hesablama_total < 1000.00) {
                var mantikli = '15';


            } else if (hesablama_total < 10000.00) {
                var mantikli = '60';
            } else if (hesablama_total < 50000.00) {
                var mantikli = '120';
            } else if (hesablama_total < 100000.00) {
                var mantikli = '200';
            } else if (hesablama_total < 500000.00) {
                var mantikli = '300';
            } else if (hesablama_total < 1000000.00) {
                var mantikli = '600';
            } else {
                var mantikli = '1000';

            }


//hefte gunlerine gore derece
            var emeliyyat_xerci = $("#em_xerc").children("option:selected").val();
            // alert(emeliyyat_xerci);
            var plus_em = $("#elave_total_em_xerc").html();

            if (emeliyyat_xerci == '2') {
                mantikli = 2 * mantikli;
            } else {
                mantikli = 1 * mantikli;
            }
            mantikli = mantikli.toFixed(2);

            $('#big_mantikli').html(mantikli);

//Xif derece
            var xif_derece = $("#xif_derece").children("option:selected").val();

            var cemxif = parseFloat(xif_derece);
            $('#xif_derece1').html(cemxif);

//20-ni hesabla
            var iyirmi = parseFloat(cemxif) * parseFloat(hesablama_total_1) / 100;
            iyirmi = iyirmi.toFixed(2);
            $('#iyirmi').html(iyirmi);
//20 hesabla bitdi
            var ayten = $('#dag_derece_top').html();

//32 ni hesabla
            var otuziki = parseFloat(mantikli) + parseFloat(ayten) + parseFloat(hesablama_total) + parseFloat(iyirmi);
            otuziki = otuziki.toFixed(2);
            $('#otuziki').html(otuziki);
//32 hesabla bitdi

//32nin 18% hesabla

            var otuzikininfaizi = parseFloat(otuziki) * 18 / 100;
            otuzikininfaizi = otuzikininfaizi.toFixed(2);
            $('#otuzikininfaizi').html(otuzikininfaizi);

//32nin 18% hesabla bitdi

//mehsul sayi hesabla
            var mehsulsayi = $('#counter').html();
            $('#mehsulsayi').html(mehsulsayi);

            if (mehsulsayi == '2' || mehsulsayi == '3' || mehsulsayi == '4') {
                var mehsulsayifaiz = '60.00';

            } else if (mehsulsayi == '5' || mehsulsayi == '6' || mehsulsayi == '7') {
                var mehsulsayifaiz = '90.00';

            } else if (mehsulsayi == '8' || mehsulsayi == '9' || mehsulsayi == '10') {
                var mehsulsayifaiz = '120.00';

            } else if (mehsulsayi == '11' || mehsulsayi == '12' || mehsulsayi == '13') {
                var mehsulsayifaiz = '150.00';

            } else if (mehsulsayi == '14' || mehsulsayi == '15' || mehsulsayi == '16') {
                var mehsulsayifaiz = '180.00';

            } else if (mehsulsayi == '1') {
                var mehsulsayifaiz = '30.00';

            }
//alert(mehsulsayifaiz);

            $('#mehsulsayifaiz').html(mehsulsayifaiz);
            $('#mehsulsayifaiz_1').html(mehsulsayifaiz);

//edv mehsulfaiz
            var mehsulsayifaizedv = mehsulsayifaiz * 18 / 100;
            mehsulsayifaizedv = mehsulsayifaizedv.toFixed(2);

            $('#mehsulsayifaizedv').html(mehsulsayifaizedv);

// birqiymetli yekunun hesablanmasi
//01
            console.log(mantikli)

            $('#y_nolbir').html(mantikli);
            $('#y_nolbir_1').html(mantikli);

//20
            var iyirmi_cemi = parseFloat(iyirmi) + parseFloat(ayten);
            iyirmi_cemi = iyirmi_cemi.toFixed(2);

            $('#y_iyirmi').html(iyirmi_cemi);
            $('#y_iyirmi_1').html(iyirmi_cemi);

            //32
            $('#y_otuziki').html(otuzikininfaizi);
            $('#y_otuziki_1').html(otuzikininfaizi);

            //75
            $('#y_yetmisbes').html(mehsulsayifaiz);
            $('#y_yetmisbes_1').html(mehsulsayifaiz);

            //85
            $('#y_seksenbes').html(mehsulsayifaizedv);
            $('#y_seksenbes_1').html(mehsulsayifaizedv);

            var ayten = $('#dag_derece_top').html();

            var yekunnn = parseFloat(mantikli) + parseFloat(iyirmi) + parseFloat(ayten) + parseFloat(otuzikininfaizi) + parseFloat(mehsulsayifaiz) + parseFloat(mehsulsayifaizedv);
            total_yekun = yekunnn.toFixed(2);

            $('#yekunnn').html(total_yekun);
            $('#yekunnn_1').html(total_yekun);

            $("#netice").css("display", "block");
        }
    </script>
@endsection
