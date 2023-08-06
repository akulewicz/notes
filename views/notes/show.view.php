<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
  
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="mb-6"><a class="text-blue-500 underline" href="/notes">Back to all notes</a></div> 
        <p><?= $note['body']; ?></p>
    </div>
  </main>

<?php require base_path('views/partials/footer.php'); ?>