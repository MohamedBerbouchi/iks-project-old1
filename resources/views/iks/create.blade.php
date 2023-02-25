@extends('layouts.layout')

@section('content')
    
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
          <h1 class="display-4">saisir default confection</h1>
          <button class="btn btn-success">liste defauts</button>
        </div>
      </div>
      <form action="" class="mt-5">

          <div class="mb-3">
            <label class="form-label">operatrice</label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label class="form-label">OF</label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label class="form-label">N program</label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label class="form-label">quantité</label>
            <input type="number" class="form-control" >
          </div>
          <div class="mb-3">
            <label class="form-label">type defaut</label>
            <select name="" id="" class="form-select">

                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
            </select>
          </div>
           
    
          <button type="submit" class="btn btn-primary"> valider</button>
    </form>
</div>


@endsection