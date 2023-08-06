<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>


  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach( $notes as $note) : ?>
            <li><a class="text-blue-500" href="/note?id=<?= $note['id'] ?>"><?= $note['body'] ?></a></li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
              <a class="text-blue-500 hover:underline" href="/notes/create">Add new note</a>
        </p>
    </div>
  </main>

<?php require base_path('views/partials/footer.php'); ?>