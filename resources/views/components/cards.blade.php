<div class="card h-100 shadow-sm border-0">
  <div class="card-body d-flex flex-column">
    <div class="flex-grow-1">
      <h4 class="card-title mb-1 fw-bold">{{ $movieTitle }}</h4>
      <p class="card-text small text-muted mb-3 italic">
        ({{ $movieOriginalTitle }})
      </p>
      <div class="d-flex flex-column gap-2 mb-3">
        <span class="card-text small text-muted mb-3 italic">
          {{ $movieNationality }}
        </span>
        <span class="small text-secondary">
          {{ $movieDate }}
        </span>
      </div>
    </div>

    <div class="mt-2">
      <div class="p-2 rounded-bottom text-end" style="background-color: #e2eeff;">
          <span class="text-dark small"><span class="fw-bold fs-5">{{ $movieVote }}</span>/10</span>
      </div>
    </div>
  </div>
</div>