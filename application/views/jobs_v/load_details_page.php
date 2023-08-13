<?php
/*
echo'<pre>';
print_r($all_details);*/

if (isset($all_details) && $all_details != null) { ?>
    <div class="row">
        <div class="col-9 col-sm-9">
            <table class="table table-borderless">
                <tbody>
                <tr>
                    <td class="sidetd" style=""><b><?= translate('The Date') ?> : </b></td>
                    <td><?= $all_details->date_ar ?></td>
                </tr>
                <tr>
                    <td class="sidetd" style=""><b><?= translate('Job title in Arabic') ?> : </b></td>
                    <td><?= $all_details->title ?></td>

                </tr>
                <tr>
                    <td class="sidetd" style=""><b><?= translate('Job title in English') ?> : </b></td>
                    <td><?= $all_details->title_en ?></td>

                </tr>
                <tr>
                    <td class="sidetd" style=""><b><?= translate('Job title in Russian') ?> : </b></td>
                    <td><?= $all_details->title_ru ?></td>

                </tr>
                <tr>
                    <td class="sidetd" style=""><b> <?= translate('Job Details in Arabic') ?> : </b></td>
                    <td><?= $all_details->details ?></td>
                </tr>
                <tr>
                    <td class="sidetd" style=""><b><?= translate('Job Details in English') ?> : </b></td>
                    <td><?= $all_details->details_en ?></td>
                </tr>
                <tr>
                    <td class="sidetd" style=""><b><?= translate('Job Details in Russian') ?> : </b></td>
                    <td><?= $all_details->details_ru ?></td>
                </tr>
                <tr>
                    <td class="sidetd" style=""><b> <?= translate('Job responsibilities in Arabic') ?> : </b></td>
                    <td><?= $all_details->responsibilities ?></td>
                </tr>
                <tr>
                    <td class="sidetd" style=""><b><?= translate('Job responsibilities in English') ?> : </b></td>
                    <td><?= $all_details->responsibilities_en ?></td>
                </tr>
                <tr>
                    <td class="sidetd" style=""><b><?= translate('Job responsibilities in Russian') ?> : </b></td>
                    <td><?= $all_details->responsibilities_ru ?></td>
                </tr>
                <tr>
                    <td class="sidetd" style=""><b> <?= translate('Job Education and Experience in Arabic') ?> : </b>
                    </td>
                    <td><?= $all_details->education_experience ?></td>
                </tr>
                <tr>
                    <td class="sidetd" style=""><b><?= translate('Job Education and Experience in English') ?> : </b>
                    </td>
                    <td><?= $all_details->education_experience_en ?></td>
                </tr>
                <tr>
                    <td class="sidetd" style=""><b><?= translate('Job Education and Experience in Russian') ?> : </b>
                    </td>
                    <td><?= $all_details->education_experience_ru ?></td>
                </tr>
                <tr>
                    <td class="sidetd" style=""><b> <?= translate('Job Skills in Arabic') ?> : </b>
                    </td>
                    <td><?= $all_details->skills ?></td>
                </tr>
                <tr>
                    <td class="sidetd" style=""><b><?= translate('Job Skills in English') ?> : </b>
                    </td>
                    <td><?= $all_details->skills_en ?></td>
                </tr>
                <tr>
                    <td class="sidetd" style=""><b><?= translate('Job Skills in Russian') ?> : </b>
                    </td>
                    <td><?= $all_details->skills_ru ?></td>
                </tr>


                </tbody>
            </table>
        </div>
    </div>
    <?php
} ?>