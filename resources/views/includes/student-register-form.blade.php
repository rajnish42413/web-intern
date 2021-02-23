<div class="register-form">
    <header class="section-header text-left">
        <h2 class="text-left">
            Individual Register for 
            <span>
               WeIntern Olympiads
            </span>
        </h2>
        <p class="text-left">
            Fill the form and our representative will contact you within 24 working hours.
        </p>
    </header>
    <form>
        <div class="form-group">
            <input class="form-control" placeholder="Student Name" type="name">
        </div>

        <div class="form-group">
            <input class="form-control" placeholder="School Name" type="text">
        </div>


        <div class="form-group">
            <input class="form-control" placeholder="Email ID" type="email">
        </div>

        <div class="form-group">
            <input class="form-control" placeholder="Mobile Number" type="tel">
        </div>

        <div class="form-group mb-5">
            <select class="form-control">
                <option>Select Class</option>
                @for ($i = 2; $i < 12; $i++)
                    <option value="{{$i}}"> class {{$i}}th</option>
                @endfor
            </select>
        </div>


        <button class="btn btn-primary btn-block" type="submit">
            Register Now
        </button>
    </form>
</div>

