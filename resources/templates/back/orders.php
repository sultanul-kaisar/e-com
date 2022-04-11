
<?php require_once("../../resources/config.php") ?>



       
		
<!--**********************************
    Content body start

    <!-- row -->
    <div class="container-fluid">

        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)"> Orders</a></li>
            </ol>
        </div>			
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0 table-responsive-lg text-black">
                            <thead>
                                <tr>
                                    <th class="align-middle">
                                        <div class="custom-control custom-checkbox ml-1">
                                            <input type="checkbox" class="custom-control-input" id="checkAll">
                                            <label class="custom-control-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th class="align-middle">Order</th>
                                    <th class="align-middle pr-7">Date</th>
                                    <th class="align-middle minw200">Ship To</th>
                                    <th class="align-middle text-right">Status</th>
                                    <th class="align-middle text-right">Amount</th>
                                    <th class="no-sort"></th>
                                </tr>
                            </thead>
                            <tbody id="orders">
                                <tr class="btn-reveal-trigger">
                                    <td class="py-2">
                                        <div class="custom-control custom-checkbox checkbox-success">
                                            <input type="checkbox" class="custom-control-input" id="checkbox">
                                            <label class="custom-control-label" for="checkbox"></label>
                                        </div>
                                    </td>
                                    <td class="py-2">
                                        <a href="#">
                                            <strong class="text-black">#181</strong></a> by <strong class="text-black">Ricky
                                            Antony</strong><br /><a href="mailto:ricky@example.com">ricky@example.com</a></td>
                                    <td class="py-2">20/04/2020</td>
                                    <td class="py-2">Ricky Antony, 2392 Main Avenue, Penasauka, New Jersey 02149
                                        <p class="mb-0 text-500">Via Flat Rate</p>
                                    </td>
                                    <td class="py-2 text-right"><span class="badge badge-success">Completed<span
                                                class="ml-1 fa fa-check"></span></span>
                                    </td>
                                    <td class="py-2 text-right">$99
                                    </td>
                                    <td class="py-2 text-right">
                                        <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                            <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                                                <div class="py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="btn-reveal-trigger">
                                    <td class="py-2">
                                        <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" class="custom-control-input" id="checkbox1">
                                            <label class="custom-control-label" for="checkbox1"></label>
                                        </div>
                                    </td>
                                    <td class="py-2">
                                        <a href="#">
                                            <strong class="text-black">#182</strong></a> by <strong class="text-black">Kin Rossow</strong><br /><a href="mailto:kin@example.com">kin@example.com</a></td>
                                    <td class="py-2">20/04/2020</td>
                                    <td class="py-2">Kin Rossow, 1 Hollywood Blvd,Beverly Hills, California 90210
                                        <p class="mb-0 text-500">Via Free Shipping
                                        </p>
                                    </td>
                                    <td class="py-2 text-right"><span class="badge badge-primary">Processing<span
                                                class="ml-1 fa fa-redo"></span></span>
                                    </td>
                                    <td class="py-2 text-right">$120
                                    </td>
                                    <td class="py-2 text-right">
                                        <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                            <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                                                <div class="py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="btn-reveal-trigger">
                                    <td class="py-2">
                                        <div class="custom-control custom-checkbox checkbox-secondary">
                                            <input type="checkbox" class="custom-control-input" id="checkbox2">
                                            <label class="custom-control-label" for="checkbox2"></label>
                                        </div>
                                    </td>
                                    <td class="py-2">
                                        <a href="#">
                                            <strong class="text-black">#183</strong></a> by <strong class="text-black">Merry
                                            Diana</strong><br /><a href="mailto:merry@example.com">merry@example.com</a></td>
                                    <td class="py-2">30/04/2020</td>
                                    <td class="py-2">Merry Diana, 1 Infinite Loop, Cupertino, California 90210
                                        <p class="mb-0 text-500">Via Link Road</p>
                                    </td>
                                    <td class="py-2 text-right"><span class="badge badge-secondary">On
                                            Hold<span class="ml-1 fa fa-ban"></span></span>
                                    </td>
                                    <td class="py-2 text-right">$70
                                    </td>
                                    <td class="py-2 text-right">
                                        <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                            <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                                                <div class="py-2"><a class="dropdown-item" href="#!">Completed</a><a class="dropdown-item" href="#!">Processing</a><a class="dropdown-item" href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--**********************************
    Content body end
***********************************-->



        