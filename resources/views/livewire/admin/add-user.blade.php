<div>
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Manage Users</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin-users') }}">Users</a> </li>
                        <li class="breadcrumb-item active">Add User</li>
                    </ol>
                </div>
            </div>
        </div>
        <form >
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">

                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <h3>please fix the follow error :</h3>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <input type="hidden" wire:model.lazy="user_id" value="{{ Auth::user()->id }}">
                            <div class="form-body">
                                <h3 class="card-title">User info</h3>
                                <hr>
                                <div class="row p-t-20">

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="icon-user"></i></span>
                                                        </div>
                                                        <input input type="text" id="name" class="form-control"
                                                            wire:model.lazy="name" placeholder="full name">
                                                    </div>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="icon-envelope"></i></span>
                                                        </div>
                                                        <input input type="text" id="latitude" class="form-control"
                                                            id="email" wire:model.lazy="email"
                                                            placeholder="xxxxx@xxxx.xxx">
                                                    </div>
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phoneNo">Phone number</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="icon-phone"></i></span>
                                                        </div>
                                                        <input type="tel" class="form-control" id="phoneNo"
                                                            wire:model.lazy="phoneNo" placeholder="1234567890 ">
                                                    </div>
                                                    @error('phoneNo')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="facebook">Facebook</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class=" icon-social-facebook"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="facebook"
                                                            wire:model.lazy="facebook"
                                                            placeholder="https://web.facebook.com/xxxxx">
                                                    </div>
                                                    @error('facebook')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="twitter">Twitter</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class=" icon-social-twitter"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="twitter"
                                                            wire:model.lazy="twitter"
                                                            placeholder="https://twitter.com/xxxxx">
                                                    </div>
                                                    @error('twitter')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="youtube">Youtube</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class=" icon-social-youtube"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="youtube"
                                                            wire:model.lazy="youtube"
                                                            placeholder="https://youtube.com/xxxxx">
                                                    </div>
                                                    @error('youtube')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="birthdate">Birthdate</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class=" icon-calender"></i></span>
                                                        </div>
                                                        <input type="date" placeholder="123 456 7890"
                                                            wire:model='birthdate'
                                                            class="form-control form-control-line">
                                                    </div>
                                                    @error('birthdate')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="utype">Type</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class=" icon-people"></i></span>
                                                        </div>
                                                        <select name="utype" wire:model="utype"
                                                            class="form-control" id="selectedType">
                                                            <option value="ADM">Admin</option>
                                                            <option value="USR">User</option>
                                                        </select>
                                                    </div>
                                                    @error('utype')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <textarea id="address" rows="7" class="form-control" wire:model.lazy="address"
                                                        placeholder="Enter city's description in english"></textarea>
                                                    @error('address')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea id="description" rows="7" class="form-control" wire:model.lazy="description"
                                                        placeholder="Enter city's description in english"></textarea>
                                                    @error('description')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>





                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class=" col-3">


                    <div class="card">
                        <div class="card-body text-center">
                            <div class="row button-group">
                                <div class="col-lg-6 col-md-4">
                                    <button id="btn-submit" class="btn waves-effect waves-light btn-block btn-success "><i
                                            class="fa fa-save"></i>
                                        Save</button>
                                </div>
                                <div class="col-lg-6 col-md-4">
                                    <a type="button" href="{{ route('admin-cities') }}"
                                        class="btn waves-effect waves-light btn-block btn-danger">Cancel</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">

                            <div class=" text-center ">
                                @if ($photo)
                                    <img id="image-ville" src="{{ $photo->temporaryUrl() }}"
                                        style="border-radius: 15px;max-height:300px; max-width:259px;">
                                @else
                                    <img id="image-ville"
                                        src="{{ asset('primary/assets/images/cities/No_Image_Available.jpg') }}"
                                        style="border-radius: 15px;max-height:300px; max-width:259px;">
                                    @error('photo')
                                        {{ $message }}
                                    @enderror
                                @endif
                                <input type="file" id="uploadfile" class="custom-file-input d-none"
                                    wire:model="photo" accept="image/*">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row" id="additional">
                <div class="col-lg-9">
                    <div class="card">

                        <div class="card-body">


                            <div class="form-body">
                                <h3 class="card-title">Additional info</h3>
                                <hr>
                                <div class="row p-t-20">

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">All Permissions</label>
                                                    <div class="input-group mb-3">

                                                        <select class="form-control" id="permissions"
                                                            style="width: 100%" size="4" wire:ignore>
                                                            @foreach ($permissions as $permission)
                                                                <option value="{{ $permission->id }}">
                                                                    {{ $permission->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="d-none" id="lbl" for="email">Selected Permissions</label>
                                                    <div class="input-group mb-3">

                                                        <select class="form-control d-none" id="permissions2"
                                                            style="width: 100%" size="4" multiple
                                                            wire:change="change" wire:ignore>

                                                        </select>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>



                                    </div>





                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>

    </div>

    </form>
</div>
</div>


@push('styles')
    <link href="{{ asset('primary/dist/css/pages/stylish-tooltip.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#additional').hide();
            if ($('#selectedType').val() == 'USR') {
                $('#additional').show();
            }
            var langue = 0;
            $("#image-ville").click(function() {
                $('#uploadfile').click();
            });


            $("#permissions").dblclick(function() {
            var index = 1;
            var itemText = $('#permissions option:selected').text();
            var itemVal = $('#permissions option:selected').val();
            var option = new Option(itemText, itemVal);
            $("#permissions2").append(option);
            $(this).find('option:selected').remove();
            $('#permissions2').focus();
            $('#permissions2 option').each(function(e) {
                this.text = index + " - " + this.text.split(' -').pop();
                index++;
            });
        });

        $("#permissions2").dblclick(function(e) {
            var itemText = $('#permissions2 option:selected').text().split('- ').pop();
            var itemVal = $('#permissions2 option:selected').val();
            var option = new Option(itemText, itemVal);
            $("#permissions").append(option);
            $(this).find('option:selected').remove();
            var index = 1;
            $('#permissions2 option').each(function(e) {
                this.text = index + " - " + this.text.split(' -').pop();
                index++;
            });
            var countoption = $('#permissions2 option').length;
            if (countoption === 0) {
                $('#permissions2').addClass('d-none');
            }
        });

        $("#btn-submit").click(function(event) {
            event.preventDefault();
            var test = [];
            $('#permissions2 option').each(function(e) {
                test.push($(this).val());
            });
            // console.log(test);
            Livewire.emit('store', test);
        });


        $("#permissions2").bind("DOMSubtreeModified", function() {
            var countoption = $('#permissions2 option').length;
            if (countoption > 0) {
                $('#permissions2').removeClass('d-none');
                $('#lbl').removeClass('d-none');}
            
        });
        });
    </script>
@endpush
