<div class="mc-wrapper">
    <div id="system-message-container">
        <?php
            //message, error, notice
            $message_type = "error";
            $message_title = "Error";
            $message_message = $this->session->flashdata('message');
            if ($message_message) {
        ?>
        <dl id="system-message">
            <dt class="<?php echo $message_type; ?>"><?php echo $message_title; ?></dt>
            <dd class="<?php echo $message_type; ?> message">
                <ul>
                    <li><?php echo $message_message; ?></li>
                </ul>

            </dd>
        </dl>
        <?php
            }
        ?>
    </div>
    <div id="mc-title">
        <?php
            echo $module_title;
            echo $help->render();
            echo $toolbar->render();
        ?>
        <div class="mc-clr"></div>
    </div>
    <div id="mc-submenu">
        <ul id="submenu">
            <li>
                <span class="nolink">Users</span>
            </li>
            <li>
                <span class="nolink">User Groups</span>
            </li>
            <li>
                <span class="nolink">Viewing Access Levels</span>
            </li>
        </ul>
    </div>
    <div id="mc-component">
        <script type="text/javascript">
            Joomla.submitbutton = function(task)
            {
                switch (task) {
                    case 'golongan.apply':
                        var vform_task = document.getElementById('vform_task')
                        vform_task.value = 'golongan.apply';
                        var vform_form = document.getElementById('golongan-form');
                        vform_form.action = "<?php echo site_url('golongan/add')."?".$_SERVER['QUERY_STRING']; ?>";
                        Joomla.submitform(task, document.getElementById('golongan-form'));
                        break;
                    case 'golongan.save':
                        var form = document.getElementById('golongan-form');
                        form.action = "<?php echo site_url('golongan/add'); ?>";
                        Joomla.submitform(task, document.getElementById('golongan-form'));
                        break;
                    case 'golongan.save2new':
                        var form = document.getElementById('golongan-form');
                        form.action = "<?php echo site_url('golongan/add'); ?>";
                        Joomla.submitform(task, document.getElementById('golongan-form'));
                        break;
                }
                if (task == 'golongan.cancel' || document.formvalidator.isValid(document.id('golongan-form'))) {
                    Joomla.submitform(task, document.getElementById('golongan-form'));
                }
            }
        </script>
        <form action="<?php echo site_url('golongan'); ?>" method="post" name="adminForm" id="golongan-form" class="form-validate">
            <div class="width-100">
                <fieldset class="adminform">
                    <legend>Golongan Perkiraan</legend>
                    <ul class="adminformlist">
                        <li>
                            <label id="vform_kode_golongan-lbl" for="vform_kode_golongan" class="hasTip required" title="Kode Golongan::Masukan Kode Golongan untuk Golongan Perkiraan.">Kode Golongan<span class="star">&#160;*</span></label>
                            <input type="hidden" name="vform[id]" id="vform_id" value="<?php echo $data_golongan['id']; ?>" />
                            <input type="text" name="vform[kode_golongan]" id="vform_kode_golongan" value="<?php echo $data_golongan['kode_golongan']; ?>" class="inputbox required" size="20"/>
                        </li>
                        <li>
                            <label id="vform_nama_golongan-lbl" for="vform_nama_golongan" class="hasTip required" title="Nama Golongan::Masukan Nama Golongan untuk Golongan Perkiraan.">Nama Golongan<span class="star">&#160;*</span></label>
                            <input type="text" name="vform[nama_golongan]" id="vform_nama_golongan" value="<?php echo $data_golongan['nama_golongan']; ?>" class="inputbox required" size="60"/>
                        </li>
                        <li>
                            <label id="vform_kategori-lbl" for="vform_kategori" class="hasTip required" title="Kategori::Pilih Kategori untuk Golongan Perkiraan ini.">Kategori<span class="star">&#160;*</span></label>
                            <select id="vform_kategori" name="vform[kategori]" class="inputbox required">
                                <?php
                                    foreach ($cons_golongan_perkiraan as $key => $value) {
                                        if ($key == $data_golongan['kategori']) {
                                            echo "<option value=\"$key\" selected>$value</option>";
                                        }
                                        else {
                                            echo "<option value=\"$key\">$value</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </li>
                        <li>
                            <label id="vform_saldo_normal-lbl" for="vform_saldo_normal" class="hasTip required" title="Saldo Normal::Pilih Saldo Normal untuk Golongan Perkiraan ini.">Saldo Normal<span class="star">&#160;*</span></label>
                            <select id="vform_saldo_normal" name="vform[saldo_normal]" class="inputbox required">
                                <?php
                                    foreach ($cons_kategori as $key => $value) {
                                        if ($key == $data_golongan['saldo_normal']) {
                                            echo "<option value=\"$key\" selected>$value</option>";
                                        }
                                        else {
                                            echo "<option value=\"$key\">$value</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </li>
                    </ul>
                </fieldset>
                <input type="hidden" name="task" id="vform_task" value="" />
                <input type="hidden" name="42b0cd08aa39c1ecec68529295276277" value="1" />
            </div>
        </form>
        <div class="clr"></div>
    </div>
    <div class="mc-clr"></div>
</div>
