<div class="mc-wrapper">
    <div id="system-message-container"></div>
    <div id="mc-title">
        <?php
            echo $module_title;
            echo $help->render();
            echo $toolbar->render();
        ?>
        <div class="mc-clr"></div>
    </div>
    <div id="mc-submenu"></div>
    <div id="mc-component">
        <form action="<?php echo site_url('golongan'); ?>" method="post" name="adminForm" id="adminForm">
            <fieldset id="filter-bar">
                <div class="filter-search fltlft">
                    <label class="filter-search-lbl" for="filter_search">Filter:</label>
                    <input type="text" name="filter_search" id="filter_search" value="" title="Search in module title." />
                    <button type="submit">Search</button>
                    <button type="button" onclick="document.id('filter_search').value='';this.form.submit();">Clear</button>
                </div>
                <div class="filter-select fltrt">
                    <select name="filter_state" class="inputbox" onchange="this.form.submit()">
                        <option value="">- Select Status -</option>
                        <option value="-2">Trashed</option>
                    </select>
                </div>
            </fieldset>
            <div class="clr"></div>
            <table class="adminlist" id="modules-mgr">
                <thead>
                    <tr>
                        <th width="1%">
                            <input type="checkbox" name="checkall-toggle" value="" title="Check All" onclick="Joomla.checkAll(this)" />
                        </th>
                        <th width="15%" class="left">
                            <a href="javascript:tableOrdering('kode_golongan','asc','');" title="Click to sort by this column">Kode Golongan</a>
                        </th>
                        <th class="title">
                            <a href="javascript:tableOrdering('nama_golongan','asc','');" title="Click to sort by this column">Nama Golongan</a>
                        </th>
                        <th width="15%" class="left">
                            <a href="javascript:tableOrdering('kategori','asc','');" title="Click to sort by this column">Kategori</a>
                        </th>
                        <th width="10%">
                            <a href="javascript:tableOrdering('saldo_normal','asc','');" title="Click to sort by this column">Saldo Normal</a>
                        </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="10">
                            <div class="mc-limit">
                                <select id="limit" name="limit" class="inputbox" size="1" onchange="Joomla.submitform();">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20" selected="selected">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="0">All</option>
                                </select>
                                <span>Display # </span>
                            </div>
                            <div class="mc-page-count">Page 1 of 3</div>
                            <del class="mc-pagination-container">
                                <div class="mc-pagination">
                                    <div class="page-button off">
                                        <div class="start">
                                            <span>Start</span>
                                        </div>
                                    </div>
                                    <div class="page-button">
                                        <div class="prev">
                                            <span>Prev</span>
                                        </div>
                                    </div>
                                    <div class="pages">
                                        <div class="page">
                                            <span>1</span>
                                            <a href="#" title="2" onclick="javascript: document.adminForm.limitstart.value=20; submitform();return false;">2</a>
                                            <a href="#" title="3" onclick="javascript: document.adminForm.limitstart.value=40; submitform();return false;">3</a>
                                        </div>
                                    </div>
                                    <div class="page-button">
                                        <div class="next">
                                            <a href="#" title="Next" onclick="javascript: document.adminForm.limitstart.value=20; submitform();return false;">Next</a>
                                        </div>
                                    </div>
                                    <div class="page-button">
                                        <div class="end">
                                            <a href="#" title="End" onclick="javascript: document.adminForm.limitstart.value=40; submitform();return false;">End</a>
                                        </div>
                                    </div>
                                </div>
                            </del>
                            <input type="hidden" name="limitstart" value="0" />
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                        $no = 1;
                        foreach ($data_golongan as $row) {
                            if ($no % 2 == 0) {
                                echo "<tr class=\"row0\">";
                            }
                            else {
                                echo "<tr class=\"row1\">";
                            }
                            $id = $row['id'];
                            $kode_golongan = $row['kode_golongan'];
                            $nama_golongan = $row['nama_golongan'];
                            $kategori = $row['kategori'];
                            $saldo_normal = $row['saldo_normal'];
                    ?>
                    <td class="center">
                        <input type="checkbox" id="cb<?php echo $no; ?>" name="cid[]" value="<?php echo $id; ?>" onclick="isChecked(this.checked);" title="Checkbox for row 1" />
                    </td>
                    <td>
                        <a href="<?php echo site_url('golongan/edit/'.$id); ?>"><?php echo $kode_golongan; ?></a>
                    </td>
                    <td class="left"><?php echo $nama_golongan; ?></td>
                    <td class="left"><?php echo $kategori; ?></td>
                    <td class="center"><?php echo $saldo_normal; ?></td>
                    <?php
                            echo "</tr>";
                            $no++;
                        }
                    ?>
                </tbody>
            </table>
            <div>
                <input type="hidden" name="task" value="" />
                <input type="hidden" name="boxchecked" value="0" />
                <input type="hidden" name="filter_order" value="position" />
                <input type="hidden" name="filter_order_Dir" value="asc" />
                <input type="hidden" name="9c288c0ce15b419cddb279e815674d4a" value="1" />
            </div>
        </form>
    </div>
    <div class="mc-clr"></div>
</div>
