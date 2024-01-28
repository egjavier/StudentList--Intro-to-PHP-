<?php

  session_start();

  // $students = array('jane', 'john', 'joe')
  $students = $_SESSION['students']
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>

<body class="p-5">
  <main class="p-5 m-5 max-w-[1000px] border rounded-md shadow-md mx-auto">
    <h1 class="p-3 font-black text-center text-xl">👩‍🎓 Student List</h1>
    <hr>

    <form class="px-3 mt-5 text-end" 
          action="newstudent.php" 
          method="POST">
      <input type="text" 
              required
              name="firstname" 
              id="firstname"
              class="border border-2 rounded indent-2 w-full py-2 placeholder:italic mb-2" 
              placeholder="firstname" />
      <input type="text" 
              required
              name="lastname" 
              id="lastname"
              class="border border-2 rounded indent-2 w-full py-2 placeholder:italic mb-2" 
              placeholder="lastname" />
      <input type="text" 
              required
              name="batch" 
              id="batch"
              class="border border-2 rounded indent-2 w-full py-2 placeholder:italic mb-2" 
              placeholder="batch" />

      <button class="border border-sky-600 text-sky-600 px-3 py-1 rounded font-bold hover:shadow-md mt-2
                    w-36"
              type="submit">
        + Add
      </button>
    </form>
    <form action="clearstudents.php"
          method="POST"
          class="text-end">
      <button class=" border border-sky-600  bg-sky-600 text-white px-3 py-1 rounded hover:shadow-md
                    mx-3 mt-3 w-36">
        🗑️ Clear List
      </button>
    </form>
    <div class="px-10 py-3">
      <ul class="list-disc">
        <?php
          foreach($students as $student) {
            echo "<li>".$student['firstname']." ".$student['lastname']." "."|"." ".$student['batch']."</li>";
          }
        ?>
      </ul>
    </div>
  </main>
</body>

</html>

