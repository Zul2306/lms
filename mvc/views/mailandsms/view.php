<?php if (customCompute($mailandsms)) { ?>
    <div class="well">
        <div class="row">
            <div class="col-sm-6">
                <button class="btn-cs btn-sm-cs" onclick="javascript:printDiv('printablediv')"><span class="fa fa-print"></span> <?= $this->lang->line('print') ?> </button>

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li><a href="<?= base_url("dashboard/index") ?>"><i class="fa fa-laptop"></i> <?= $this->lang->line('menu_dashboard') ?></a></li>
                    <li><a href="<?= base_url("mailandsms/index") ?>"><?= $this->lang->line('menu_mailandsms') ?></a></li>
                    <li class="active"><?= $this->lang->line('view') ?></li>
                </ol>
            </div>
        </div>
    </div>

    <div id="printablediv">
        <section class="content invoice">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <?php
                        if ($siteinfos->photo) {
                            $array = array(
                                "src" => base_url('uploads/images/' . $siteinfos->photo),
                                'width' => '25px',
                                'height' => '25px',
                                'class' => 'img-circle',
                                'style' => 'margin-top:-10px',
                            );
                            echo img($array);
                        }
                        ?>

                    </h2>
                </div><!-- /.col -->
            </div>
            <div class="row">
                <div class="col-sm-12" style="display: flex; justify-content: flex-start; font-size: 16px; margin-top: 20px;">
                    <div style="width: 300px;">
                        <?= $this->lang->line("mailandsms_to") ?>
                        <address>
                            <strong><?= $mailandsms->users ?></strong><br>
                            <?= $this->lang->line("mailandsms_users") . " : " . $mailandsms->users ?><br>
                            <?php if (isset($mailandsms->sender)) { ?>
                                <?= $this->lang->line("mailandsms_sender") . " : " . $mailandsms->sender ?><br>
                            <?php } ?>
                            <?php if (isset($mailandsms->create_date)) { ?>
                                <?= $this->lang->line("mailandsms_dateandtime") . " : " . date('d M Y, H:i', strtotime($mailandsms->create_date)) ?><br>
                            <?php } else { ?>
                                <?= $this->lang->line("mailandsms_create_date") . " : -" ?><br>
                            <?php } ?>
                        </address>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-bordered product-style">
                            <thead>
                                <tr>
                                    <th><?= $this->lang->line('mailandsms_message') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $mailandsms->message ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row invoice-info">
                <div class="row" style="display: flex; justify-content: flex-end;">
                    <div class="col-sm-4 invoice-col" c>
                        <?php echo $this->lang->line("mailandsms_from"); ?>
                        <address>
                            <strong><?= $siteinfos->sname ?></strong><br>
                            <?= $siteinfos->address ?><br>
                            <?= $this->lang->line("mailandsms_phone") . " : " . $siteinfos->phone ?><br>
                            <?= $this->lang->line("mailandsms_email") . " : " . $siteinfos->email ?><br>
                        </address>
                    </div><!-- /.col -->

                </div>
            </div>
        </section><!-- /.content -->
    </div>


    <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            var divElements = document.getElementById(divID).innerHTML;
            var oldPage = document.body.innerHTML;
            document.body.innerHTML =
                "<html><head><title></title></head><body>" +
                divElements + "</body>";
            window.print();
            document.body.innerHTML = oldPage;
            window.location.reload();
        }

        function closeWindow() {
            location.reload();
        }
    </script>
<?php } ?>