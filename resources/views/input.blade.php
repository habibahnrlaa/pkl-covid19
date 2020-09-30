@extends('layouts.master')
@section('content')

           <!-- Page Heading -->
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-2 font-weight-bold-text-gray-800">Input Data</h1>
            
          </div>
          
  <div class="form-group">
    <label for="name">Nama Rumah Sakit</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="name">Email</label>
    <input type="email" class="form-control" id="name" placeholder="">
  </div>
  <div class="form-group">
    <label for="phone">NoTelepon</label>
    <input type="tel" class="form-control" id="phone" placeholder="">
  </div>
  <div class="form-group">
    <label for="name">Alamat</label>
    <input type="text" class="form-control" id="name" placeholder="">
  </div>
</form>

          <div class="form-group">
            <br><label for="exampleFormControlSelect1">Jenis Fasilitas Kesehatan</label></br>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Rumah Sakit</option>
      <option>Klinik</option>
      <option>Puskesmas</option>
      <option>Laboratorium</option>
      <option>Lainnya</option>
    </select>
          </div>
          </form> 

          <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Tes yang Tersedia</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Rapid Test</option>
      <option>SWAB/PCR</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Kirim</button>
@endsection