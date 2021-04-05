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
    <form action="{{ route('order/update-user') }}" method="POST">
        @csrf
        <input name="type" type="hidden" value="student">
            <div class="form-group">
                <input class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Student Name" type="name" value="{{ old('name') }}">
                    @error('name')
                    <span class="invalid-feedback small" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </input>
            </div>
            <div class="form-group">
                <input class="form-control @error('school') is-invalid @enderror" name="school" placeholder="School Name" type="name" value="{{ old('school') }}">
                    @error('school')
                    <span class="invalid-feedback small" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </input>
            </div>
            <div class="form-group">
                <input class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email ID" type="email" value="{{ old('email') }}">
                    @error('email')
                    <span class="invalid-feedback small" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </input>
            </div>
            <div class="form-group">
                <input class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Mobile Number" type="number" maxlength="10" value="{{ old('phone') }}">
                    @error('phone')
                    <span class="invalid-feedback small" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </input>
            </div>
            <div class="form-group mb-5">
                <select class="form-control" name="standard">
                    <option>
                        Select Class
                    </option>
                    @for ($i = 2; $i <= 12; $i++)
                    <option value="{{$i}}">
                        class {{$i}}th
                    </option>
                    @endfor
                </select>
            </div>
            <button class="btn btn-primary btn-block" type="submit">
                Register Now
            </button>
        </input>
    </form>
</div>
