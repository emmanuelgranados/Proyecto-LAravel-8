<div class="card-body">
    <div class="profiletimeline mt-0">
      <div class="sl-item d-flex align-items-start">
        <div class="sl-left">
          {{-- <img src="../../assets/images/users/6.jpg" alt="user"
            /> --}}

            @if ($foto[0]->foto === null)
            <img src="../../assets/images/users/5.jpg"  class="rounded-circle" width="60"
                  />
                    @else
                    <img src="public/images/usuarios/{{$foto[0]->foto}}" class="rounded-circle" width="60"
                    />
                @endif
        </div>
        <div class="sl-right">
          <div>
            <a href="javascript:void(0)" class="link">{{auth()->user()->name}}</a>
            <span class="sl-date">5 minutes ago</span>
            <blockquote class="mt-2">
              Primera Tarea
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
