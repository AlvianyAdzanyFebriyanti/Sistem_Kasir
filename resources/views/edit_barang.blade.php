@extends('home')

@section('form')
<div class="col-lg-12" style="background-color: #F3EEEA; padding-top: 3%; padding-bottom: 1%;" >
    <br>
    <form action="{{url('update').'/'. $data_product[0]->id}}" method="post" class="forms-sample">
        @csrf
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit This Form</h4>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="KodeBarang">Product Code</label>
                          <input type="text" value="{{$data_product[0]->Kode_Barang}}" class="form-control" name="kodeBarang" placeholder="Product Code">
                        </div>
                        <div class="form-group">
                          <label for="NamaBarang">Product Name</label>
                          <input type="text" value="{{$data_product[0]->Nama_Barang}}" class="form-control" name="namaBarang" placeholder="Product Name">
                        </div>
                        <div class="form-group">
                          <label for="JenisBarang">Product Type</label>
                          <select class="js-example-basic-single w-100"  name="jenisBarang">
                            <option >Food Products</option>
                            <option >Beverage Products</option>
                            <option >Health and Hygiene Products</option>
                            <option >Household Products</option>
                            <option >Beauty Products</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="qty">Qty</label>
                            <input type="text" value="{{$data_product[0]->QTY}}" class="form-control" name="qty" placeholder="QTY">
                          </div>
                          <div class="form-group">
                            <label for="qty">Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" value="{{$data_product[0]->Harga}}" class="form-control" name="harga" >
                              </div>
                          </div>
                          <div class="form-group">
                            <label for="qty">Total</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" value="{{$data_product[0]->Total}}" class="form-control" name="total" >
                              </div>
                          </div>

                          <div class="form-group">
                            <label for="qty">Discount</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" value="{{$data_product[0]->Diskon}}" class="form-control" name="diskon" >
                              </div>
                          </div>

                          <div class="form-group">
                            <label for="qty">TOTAL</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Rp</span>
                                </div>
                                <input type="text" value="{{$data_product[0]->Total_Terbaru}}" class="form-control" name="total_terbaru" >
                              </div>
                          </div>
                        
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                      </form>
                    </div>
                  </div>
                </div>
       
</div>
@endsection