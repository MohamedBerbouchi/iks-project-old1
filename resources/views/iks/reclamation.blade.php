@extends('layouts.layout')

@section('content')
    
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
          <h1 class="display-4">Reclamation Client</h1>
          <button class="btn btn-success">liste reclamations</button>

        </div>
      </div>
      <form action="" class="mt-5">

          <div class="mb-3">
            <label class="form-label">References: </label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label class="form-label">type Anomalie</label>
            <select name="" id="" class="form-select">

                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
            </select>
          </div>
           
       
          <div class="mb-3">
            <label class="form-label">Commentaire</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
    
          <button type="submit" class="btn btn-primary"> Envoyer</button>
    </form>
</div>


@endsection