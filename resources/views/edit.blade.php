<div class="col-md-12">
    <form method="POST" action="{{ url('actualizar-usuario/'.$user->id) }}">
       @csrf
       <input type="hidden" name="id" value="{{ $user->id }}">



        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">employe_id</label>
            <div class="input-group">
             <span class="input-group-text"></span>
            <input type="employe_id" class="form-control" name="employe_id" value="{{ $user->employe_id }}">
           </div>
        </div>
 <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">name</label>
            <div class="input-group">
               <span class="input-group-text"></span>
            <input type="name" class="form-control" name="name" value="{{ $user->name }}">
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">email</label>
            <div class="input-group">
               <span class="input-group-text"></span>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="input-group">
               <span class="input-group-text"></span>
            <input type="password" class="form-control" name="password" value="{{ $user->password }}">
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>