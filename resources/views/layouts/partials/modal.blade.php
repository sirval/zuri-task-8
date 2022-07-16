
  
  <!-- Modal -->
  <div class="modal fade" id="deleteUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                @csrf
                <input type="hidden" id="user_id">
                <h5>This action cannot be undone.</h5>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" id="proceed" class="btn btn-danger btn-sm">Proceed</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>