<div class="border border-info rounded ">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" id="body" class="col-sm mt-1" placeholder="cicero" required></textarea>
        <hr class="mr-2 ml-2">
        <img src="{{ auth()->user()->avatar }} "  class="rounded-circle ml-1 mb-1" alt="">
        <button type="submit" class="float-right btn btn-primary flex-left mb-1 mr-1">Cicero</button>
        
   
    </form>
   

    @error('body')
    <div class="alert alert-danger mr-1 ml-1">{{ $message }}</div>
    @enderror


</div>