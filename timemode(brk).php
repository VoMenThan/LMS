<?php include('header.php'); ?>
<div class="wrap-page timemode_qual">
    <div class="container time_content">
        <div class="row">
            <div class="col-25">
                <table class="list-player timemode">
                    <tr class="h60 label-col">
                        <td class="col-1">RACE CLASS</td>
                        <td class="col-2">GROUP</td>
                        <td class="col-3">START</td>
                        <td class="col-first col-4">FINISH</td>
                    </tr>
                    <tr class="h60 person_heading person_active">
                        <td class="col-1">UB 115 4T
                            Piston 54mm free</td>
                        <td class="col-2">1</td>
                        <td class="col-3">9:00</td>
                        <td class="col-first col-4">9:10</td>
                    </tr>
                    <tr class="h30 break">
                        <td colspan="4" class="text-center">3-minute break</td>
                    </tr>
                    <tr class="h60 person">
                        <td class="col-1">UB 115 4T
                            Piston 54mm free</td>
                        <td class="col-2">2</td>
                        <td class="col-3">9:13</td>
                        <td class="col-first col-4">9:23</td>
                    </tr>
                    <tr class="h30 break active">
                        <td colspan="4" class="text-center">3-minute break</td>
                    </tr>
                    <tr class="h60 person">
                        <td class="col-1">UB 115 4T
                            Piston 54mm free</td>
                        <td class="col-2">3</td>
                        <td class="col-3">9:26</td>
                        <td class="col-first col-4">9:36</td>
                    </tr>
                    <tr class="h30 break">
                        <td colspan="4" class="text-center break_heading">3-minute break</td>
                    </tr>
                    <tr class="h60 person">
                        <td class="col-1">125 2T 62 Piston Free</td>
                        <td class="col-2">1</td>
                        <td class="col-3">9:39</td>
                        <td class="col-first col-4">9:49</td>
                    </tr>
                    <tr class="h30 break">
                        <td colspan="4" class="text-center">3-minute break</td>
                    </tr>
                    <tr class="h60 person">
                        <td class="col-1">125 2T 62 Piston Free</td>
                        <td class="col-2">2</td>
                        <td class="col-3">9:52</td>
                        <td class="col-first col-4">10:02</td>
                    </tr>
                    <tr class="h30 break">
                        <td colspan="4" class="text-center">3-minute break</td>
                    </tr>
                    <tr class="h60 person">
                        <td class="col-1">125 2T 62 Piston Free</td>
                        <td class="col-2">3</td>
                        <td class="col-3">10:05</td>
                        <td class="col-first col-4">10:15</td>
                    </tr>
                    <tr class="h30 break">
                        <td colspan="4" class="text-center">3-minute break</td>
                    </tr>
                    <tr class="h60 person">
                        <td class="col-1">Tay ga nho 4T
                            Free</td>
                        <td class="col-2">1</td>
                        <td class="col-3">10:18</td>
                        <td class="col-first col-4">10:28</td>
                    </tr>
                    <tr class="h30 break">
                        <td colspan="4" class="text-center">3-minute break</td>
                    </tr>
                    <tr class="h60 person">
                        <td class="col-1">Tay ga nho 4T
                            Free</td>
                        <td class="col-2">2</td>
                        <td class="col-3">10:31</td>
                        <td class="col-first col-4">10:41</td>
                    </tr>
                    <tr class="h30 break">
                        <td colspan="4" class="text-center">3-minute break</td>
                    </tr>
                    <tr class="h60 person">
                        <td class="col-1">Tay ga nho 4T
                            Free</td>
                        <td class="col-2">3</td>
                        <td class="col-3">10:44</td>
                        <td class="col-first col-4">10:54</td>
                    </tr>
                    <tr class="h30 break">
                        <td colspan="4" class="text-center">3-minute break</td>
                    </tr>
                </table>
            </div>

            <div class="col-25">
                <table class="list-best-result timemode">
                    <tr class="h60 label-col">
                        <td class="col-first" colspan="2">seeding</td>
                        <td class="col-3">NAME</td>
                        <td class="col-4">best result<br/>
                            <span>(second)</span></td>
                    </tr>
                    <?php for ($i=1; $i<=16;$i++){ ?>
                        <tr class="h50 best-per">
                            <td class="col-1 col-first"><?=$i?></td>
                            <td class="col-2">V005</td>
                            <td class="col-3">NGUYEN VAN A</td>
                            <td class="col-4 col-last">6.25</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

            <div class="col-25">
                <table class="list-best-result timemode">
                    <tr class="h60 label-col">
                        <td class="col-first" colspan="2">seeding</td>
                        <td class="col-3">NAME</td>
                        <td class="col-4">best result<br/>
                            <span>(second)</span></td>
                    </tr>
                    <?php for ($i=1; $i<=16;$i++){ ?>
                        <tr class="h50 best-per">
                            <td class="col-1 col-first"><?=$i?></td>
                            <td class="col-2">V005</td>
                            <td class="col-3">NGUYEN VAN A</td>
                            <td class="col-4 col-last">6.25</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

            <div class="col-25">
                <table class="list-player estimated">
                    <tr class="h60 label-col">
                        <td>
                            ROUND 1
                            <div class="right tt-opa">estimated bracket</div>
                        </td>
                    </tr>
                    <tr class="box-list-calendar">
                        <td>
                            <?php for($i=0; $i<8; $i++){ ?>
                                <table class="item-couple">
                                    <tr class="h40">
                                        <td class="col-1">
                                            V001
                                        </td>
                                        <td class="col-2">
                                            Nguyễn Hoàng Minh Thụy
                                        </td>
                                        <td class="col-3" rowspan="2"></td>
                                        <td class="col-4" rowspan="2">
                                            <img src="assets/images/img/ar.png" alt="">
                                        </td>
                                    </tr>
                                    <tr class="h40">
                                        <td class="col-1">
                                            V002
                                        </td>
                                        <td class="col-2">
                                            Nguyễn Hoàng Minh Thụy
                                        </td>
                                    </tr>
                                </table>
                            <?php } ?>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
