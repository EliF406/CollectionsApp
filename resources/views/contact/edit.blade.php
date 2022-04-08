<form id="crmForm" action="{{ route('contacts.update', ['contact' => $contact->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <p>First Name<br />
            <input type="text" class="form-control" name="name" value="{{ $contact->name }}"></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Email<br />
            <input type="text" class="form-control" name="email" value="{{ $contact->email }}"></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Birthday<br />
            <input type="text" class="form-control" name="birthday" value="{{ $contact->birthday }}"></p>
        </div>
    </div>

    <hr/>
    <p><input type="submit" class="btn btn-primary" value="Submtit"></p>
</form>
