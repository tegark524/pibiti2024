<x-layout>
    <x-slot:title>Edit User Cuy</x-slot:title>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Masukan nama user" name="name" value="{{ $user->name }}">

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Masukan email" name="email" value="{{ $user->email }}">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Masukan password" name="password">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-dark">Simpan</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
