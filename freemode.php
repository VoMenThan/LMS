<?php include('header.php'); ?>
    <div class="wrap-page">
        <div class="container">
            <div class="row">
                <div class="col-25">
                    <table class="list-player">
                        <tr class="h60 label-col">
                            <td class="col-first col-1">SLOT</td>
                            <td class="col-2"></td>
                            <td class="col-3">START</td>
                            <td class="col-first col-4">FINISH</td>
                        </tr>
                        <tr class="h60 person active">
                            <td class="col-1">1</td>
                            <td class="col-2">free practice</td>
                            <td class="col-3">9:00</td>
                            <td class="col-first col-4">9:11</td>
                        </tr>

                        <?php for($i=2; $i<=9; $i++){ ?>
                        <tr class="h30 break">
                            <td colspan="4" class="text-center">3-minute break</td>
                        </tr>
                        <tr class="h60 person">
                            <td class="col-1"><?=$i?></td>
                            <td class="col-2">free practice</td>
                            <td class="col-3">9:00</td>
                            <td class="col-first col-4">9:11</td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>

                <div class="col-50">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda eius facilis fuga natus perspiciatis quidem reiciendis? Architecto delectus distinctio iusto nesciunt officia porro quasi quo rem, sequi? Animi, porro, vel!
                </div>

                <div class="col-25">
                    <table class="list-result">
                        <tr class="h60 label-col">
                            <td class="col-last" colspan="5"><div class="right tt-opa">other results</div></td>
                        </tr>
<!--                        Item-->
                        <tr pt-0>
                            <td class="col-1" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                            <td class="col-2">
                                0.71
                            </td>
                            <td class="col-3">
                                RT
                            </td>
                            <td class="col-4 win">
                                0.68
                            </td>
                            <td class="col-5" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 win">
                                855
                            </td>
                            <td class="col-3">
                                ET
                            </td>
                            <td class="col-4">
                                9.87
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 win">
                                326.40
                            </td>
                            <td class="col-3">
                                MPH
                            </td>
                            <td class="col-4">
                                326.40
                            </td>
                        </tr>
                        <tr class="rs h40">
                            <td class="col-1 cup">
                                X001
                                <img src="assets/images/img/cup-sm.png" alt="">
                            </td>
                            <td class="col-2 win">9.78</td>
                            <td class="col-3">TT</td>
                            <td class="col-4">9.78</td>
                            <td class="col-5">A001</td>
                        </tr>
<!--                        Item-->
                        <tr class="pt-20">
                            <td class="col-1" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                            <td class="col-2 win">
                                0.71
                            </td>
                            <td class="col-3">
                                RT
                            </td>
                            <td class="col-4">
                                0.68
                            </td>
                            <td class="col-5" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 win">
                                855
                            </td>
                            <td class="col-3">
                                ET
                            </td>
                            <td class="col-4">
                                9.87
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2">
                                326.40
                            </td>
                            <td class="col-3">
                                MPH
                            </td>
                            <td class="col-4 win">
                                326.40
                            </td>
                        </tr>
                        <tr class="rs h40">
                            <td class="col-1">
                                X001
                            </td>
                            <td class="col-2">9.78</td>
                            <td class="col-3">TT</td>
                            <td class="col-4 win">9.78</td>
                            <td class="col-5 cup">
                                <img src="assets/images/img/cup-sm.png" alt="">
                                A001
                            </td>
                        </tr>
<!--                        Item-->
                        <tr class="pt-20">
                            <td class="col-1" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                            <td class="col-2 win">
                                0.71
                            </td>
                            <td class="col-3">
                                RT
                            </td>
                            <td class="col-4">
                                0.68
                            </td>
                            <td class="col-5" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 win">
                                855
                            </td>
                            <td class="col-3">
                                ET
                            </td>
                            <td class="col-4">
                                9.87
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2">
                                326.40
                            </td>
                            <td class="col-3">
                                MPH
                            </td>
                            <td class="col-4 win">
                                326.40
                            </td>
                        </tr>
                        <tr class="rs h40">
                            <td class="col-1">
                                X001
                            </td>
                            <td class="col-2">9.78</td>
                            <td class="col-3">TT</td>
                            <td class="col-4 win">9.78</td>
                            <td class="col-5 cup">
                                <img src="assets/images/img/cup-sm.png" alt="">
                                A001
                            </td>
                        </tr>
<!--                        Item-->
                        <tr class="pt-20">
                            <td class="col-1" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                            <td class="col-2 win">
                                0.71
                            </td>
                            <td class="col-3">
                                RT
                            </td>
                            <td class="col-4">
                                0.68
                            </td>
                            <td class="col-5" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 win">
                                855
                            </td>
                            <td class="col-3">
                                ET
                            </td>
                            <td class="col-4">
                                9.87
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2">
                                326.40
                            </td>
                            <td class="col-3">
                                MPH
                            </td>
                            <td class="col-4 win">
                                326.40
                            </td>
                        </tr>
                        <tr class="rs h40">
                            <td class="col-1">
                                X001
                            </td>
                            <td class="col-2">9.78</td>
                            <td class="col-3">TT</td>
                            <td class="col-4 win">9.78</td>
                            <td class="col-5 cup">
                                <img src="assets/images/img/cup-sm.png" alt="">
                                A001
                            </td>
                        </tr>
<!--                        Item-->
                        <tr class="pt-20">
                            <td class="col-1" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                            <td class="col-2 win">
                                0.71
                            </td>
                            <td class="col-3">
                                RT
                            </td>
                            <td class="col-4">
                                0.68
                            </td>
                            <td class="col-5" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 win">
                                855
                            </td>
                            <td class="col-3">
                                ET
                            </td>
                            <td class="col-4">
                                9.87
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2">
                                326.40
                            </td>
                            <td class="col-3">
                                MPH
                            </td>
                            <td class="col-4 win">
                                326.40
                            </td>
                        </tr>
                        <tr class="rs h40">
                            <td class="col-1">
                                X001
                            </td>
                            <td class="col-2">9.78</td>
                            <td class="col-3">TT</td>
                            <td class="col-4 win">9.78</td>
                            <td class="col-5 cup">
                                <img src="assets/images/img/cup-sm.png" alt="">
                                A001
                            </td>
                        </tr>
<!--                        Item-->
                        <tr class="pt-20">
                            <td class="col-1" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                            <td class="col-2 win">
                                0.71
                            </td>
                            <td class="col-3">
                                RT
                            </td>
                            <td class="col-4">
                                0.68
                            </td>
                            <td class="col-5" rowspan="3">
                                <img src="assets/images/img/w.jpg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 win">
                                855
                            </td>
                            <td class="col-3">
                                ET
                            </td>
                            <td class="col-4">
                                9.87
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2">
                                326.40
                            </td>
                            <td class="col-3">
                                MPH
                            </td>
                            <td class="col-4 win">
                                326.40
                            </td>
                        </tr>
                        <tr class="rs h40">
                            <td class="col-1">
                                X001
                            </td>
                            <td class="col-2">9.78</td>
                            <td class="col-3">TT</td>
                            <td class="col-4 win">9.78</td>
                            <td class="col-5 cup">
                                <img src="assets/images/img/cup-sm.png" alt="">
                                A001
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>
