<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= translate('Translation_english') ?></h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body" style="overflow-x: scroll;width: 100%;">

                <?php echo form_open('translations/english', array('class' => 'validate  ')); ?>
                <input type="hidden" name="submit" value="update">
                <div class="panel-body">
                    <table  id="table1" class="table table-bordered table-condensed mb-none table-export">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th><?= translate('word') ?></th>
                            <th><?= translate('english') ?></th>
                            <th><?= translate('arabic') ?></th>
                            <th><?= translate('translations') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $count = 1;
                        $words = $query_language->result();
                        foreach ($words as $row) {
                            ?>
                            <!--  <input type="hidden" name="word_<?/*= $row->word */?>" id="word_<?/*= $row->word */?>"
                                   value="<?/*= $row->arabic */?>" />-->
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo ucwords(str_replace('_', ' ', $row->word)); ?></td>
                                <td><?php echo $row->english; ?></td>
                                <td><?php echo $row->arabic; ?></td>
                                <td>
                                    <div style="width:  100%">
                                        <div class="input-group">
										<span class="input-group-addon">
											<span class="icon"><i class="far fa-comment-alt"></i></span>
										</span>
                                            <input type="text" placeholder="Set Word Translation"
                                                   name="word_<?= $row->word ?>" oninput="$('#word_<?= $row->word ?>').val(this.value)"
                                                   value="<?= $row->english ?>" class="form-control arabic-word"/>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-offset-10 col-md-2">
                        <button class="btn btn btn-default btn-block" name="submit" value="update"><i
                                class="fas fa-edit"></i> <?= translate('update') ?></button>
                    </div>
                </div>
                <?php echo form_close(); ?>

            </div>
        </div>
    </div>
</section>

<script>


    $('.form_loaded_datatable').on('submit', function (e) {
        // e.preventDefault();
        var error_list = '';
        var btn = $(this).find('[type="submit"]');
        var arabic_word = [];
        var oTable = $('.table').dataTable();


        var data = oTable.$('input').serialize();
        var isValid = $(e.target).isValid();
        console.log(isValid);
        if (isValid) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                type: "POST",
                data: data,
                dataType: "json",
                contentType: false,
                processData: false,
                cache: false,
                beforeSend: function () {
                    Swal.fire({
                        showConfirmButton: false,
                        imageUrl: '<?=base_url()?>assets/dist/img/loader.png',
                        imageWidth: 200,
                        imageHeight: 200,
                        imageAlt: 'جاري التحميل',
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    });
                },
                success: function (data) {

                    $('.error_text').html("");
                    $('#vendor_form').find(".form-control").css('border', '1px solid #ced4da')
                    if (data.status == "fail") {
                        $.each(data.error, function (index, value) {
                            $('#vendor_form').find("[name='" + index + "']").parents('.form-group').find('.error_text').html(value);
                            $('#vendor_form').find("[name='" + index + "']").css('border', '1px solid #ed074b')
                            error_list += '<li>' + value + '</li>';
                        });
                        /* Swal.fire({
                             icon: 'error',
                             title: 'راجع البيانات',
                             text: error
                         })*/

                        Swal.fire({
                            title: '<strong> <u>راجع البيانات</u></strong>',
                            icon: 'error',
                            /*html:
                                '<ol>' + error_list + '</ol>',*/
                            showCloseButton: true,
                            focusConfirm: false,
                            confirmButtonText: 'تم',

                        })
                    } else {
                        Swal.fire({
                            position: 'top-center',
                            icon: 'success',
                            title: 'تم الحفظ',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        if (data.url) {
                            window.location.href = data.url;
                        } else {
                            location.reload(true);
                        }
                    }

                },
                error: function () {
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'هنالك خطأ',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            });
        } else {
            e.preventDefault();
        }
    });

</script>