<!--Massage-->
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<!--/ Massage-->


<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary ">
                <div class="box-header box-header-background with-border">
                        <h3 class="box-title ">Manage Customer</h3>
                </div>


                <div class="box-body">

                        <!-- Table -->
                        <table class="table table-bordered table-striped" id="dataTables-example">
                            <thead ><!-- Table head -->
                            <tr>
                                <th class="active">No</th>
                                <th class="active">Nama</th>
                                <th class="active">Pangkat</th>
                                <th class="active">NRP</th>
                                <th class="active">Satkai</th>
                                <th class="active">Email</th>
                                <th class="active">Phone</th>
                                <th class="active">Address</th>
                                <th class="active">Action</th>

                            </tr>
                            </thead><!-- / Table head -->
                            <tbody><!-- / Table body -->
                            <?php $counter =1 ; ?>
                            <?php if (!empty($customer)): foreach ($customer as $v_customer) : ?>
                                <tr class="custom-tr">
                                    <td class="vertical-td">
                                        <?php echo  $counter ?>
                                    </td>
                                    <td class="vertical-td"><?php echo $v_customer->nama ?></td>
                                    <td class="vertical-td"><?php echo $v_customer->pangkat ?></td>
                                    <td class="vertical-td"><?php echo $v_customer->nrp ?></td>
                                    <td class="vertical-td"><?php echo $v_customer->satkai ?></td>
                                    <td class="vertical-td"><?php echo $v_customer->email ?></td>
                                    <td class="vertical-td"><?php echo $v_customer->phone ?></td>
                                    <td class="vertical-td"><?php echo $v_customer->address ?></td>

                                    <td class="vertical-td">
                                        <?php echo btn_edit('admin/customer/add_customer/' . $v_customer->customer_id); ?>
                                        <?php echo btn_delete('admin/customer/delete_customer/' . $v_customer->customer_id); ?>
                                    </td>

                                </tr>
                            <?php
                                $counter++;
                            endforeach;
                            ?><!--get all sub category if not this empty-->
                            <?php else : ?> <!--get error message if this empty-->
                                <td colspan="7">
                                    <strong>There is no record for display</strong>
                                </td><!--/ get error message if this empty-->
                            <?php endif; ?>
                            </tbody><!-- / Table body -->
                        </table> <!-- / Table -->

                </div><!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!--/.col end -->
    </div>
    <!-- /.row -->
</section>




