@extends('layouts.admin')

@section('content')




    <!-- Content wrapper -->
    <div class="content-wrapper">
      <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Demandes /</span> Liste de Demandes</h4>

        <!-- Basic Bootstrap Table -->
        <div class="col-xl">
            <div class="card mb-4">
              {{-- <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Rechercher</h5>
                <small class="text-muted float-end">Merged input group</small>
              </div> --}}
              <div class="card-body">
                <form action={{ route('demandes')}}>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Id</label>
                    <div style="max-width: 400px" class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"
                        ><i class="bx bx-user"></i
                      ></span>
                      <input
                        type="text"
                        name="id"
                        value="{{request()->query('id')}}"
                        class="form-control"
                        id="basic-icon-default-fullname"
                        placeholder="Rechercher Par Id"
                        aria-label="John Doe"
                        aria-describedby="basic-icon-default-fullname2"
                      />
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Rechrcher</button>
                </form>
              </div>
            </div>
          </div>
        <div class="card">
          {{-- <h5 class="card-header">Table Basic</h5> --}}
          <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                @if(count($demandes) < 1)
    {{-- <div class="alert alert-warning">
        <strong>Sorry!</strong> No Product Found.
    </div> --}}
    <div style="font-size: 20px" class="text-center mb-5 mt-5"> <strong>Pas de données</strong></div>
  @else
              <thead>
                <tr>
                  <th>id</th>
                  <th class="d-none d-md-table-cell">Nom</th>
                  <th class="d-none d-md-table-cell">Prénom</th>
                  <th>Service</th>
                  <th class="d-none d-md-table-cell">Voir</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @forelse ($demandes as $demande )

                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{$demande->id}} </strong></td>
                    <td class="d-none d-md-table-cell">{{$demande->nom}}</td>
                    <td class="d-none d-md-table-cell">
                        {{$demande->prenom}}
                    </td>
                    <td>
                        {{$demande->service == 1 ? 'ماكثة في البيت' : ''}} {{$demande->service == 2 ? 'شركة ناشئة' : ''}} {{$demande->service == 3 ? 'حرفي وتاجر' : ''}}
                    </td>
                    <td class="d-none d-md-table-cell"><span class="badge bg-label-primary me-1"><a class="dropdown-item" href={{route('demande', ['id' => $demande->id])}}><i class="bx bx-edit-alt me-1"></i> Voir</a></span></td>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          {{-- <a  href="javascript:void(0);"
                            ><i class="bx bx-edit-alt me-1"></i> Voir</a
                          > --}}
                          <a class="dropdown-item" href={{route('demande', ['id' => $demande->id])}}><i class="bx bx-edit-alt me-1"></i> Voir</a>


                          <a class="dropdown-item" href="/delete/{{$demande->id}}"
                            ><i class="bx bx-trash me-1"></i> Supprimer</a
                          >
                        </div>
                      </div>
                    </td>
                  </tr>

                @empty


                @endforelse
              </tbody>
              @endif
            </table>
            {{$demandes->links('pagination::bootstrap-4')}}
          </div>
        </div>
        <!--/ Basic Bootstrap Table -->

        <hr class="my-5" />






















      </div>
      <!-- / Content -->


      <div class="content-backdrop fade"></div>
    </div>

@endsection
