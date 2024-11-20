<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php");
$report_unsolved = query("SELECT  COUNT(status) as status FROM reports WHERE status = 0");
$report_solved = query("SELECT COUNT(status) as status FROM reports WHERE status = 1");

$totalReport = query("select count(*) as total from reports");
$totalAcount = query("select count(*) as total from users");
?>

<!-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
    <div class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64 p-4">
        <a href="#" class="flex flex-col justify-center text-center w-full h-full bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-blue-600 dark:border-blue-500 dark:hover:bg-blue-700">
            <h5 class="mb-2 text-xl md:text-7xl font-bold tracking-tight text-gray-900 dark:text-white">
                <?= $report_unsolved[0]['status'] ?>
            </h5>
            <p class="font-normal text-gray-300 text-xl">
                Laporan masuk
            </p>
        </a>
    </div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64 p-4">
        <a href="#" class="flex flex-col justify-center text-center w-full h-full bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-purple-600 dark:border-purple-500 dark:hover:bg-purple-700">
            <h5 class="mb-2 text-xl md:text-7xl font-bold tracking-tight text-gray-900 dark:text-white">
                <?= $report_solved[0]['status'] ?>

            </h5>
            <p class="font-normal text-gray-300 text-xl">
                Laporan Selesai
            </p>
        </a>
    </div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
</div>
<div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div>
<div class="grid grid-cols-2 gap-4 mb-4">
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
</div>
<div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div>
<div class="grid grid-cols-2 gap-4">
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
</div> -->

<!---===================== FIRST ROW CONTAINING THE  STATS CARD STARTS HERE =============================-->
<div class="flex justify-center bg-[#F4F4FE] py-10 p-14">
    <!---== First Stats Container ====--->
  <div class="container mx-auto pr-4">
    <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-[#0B1D45] flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">Report</p>
      </div>
      <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5"><?php echo $totalReport[0]['total']?>
      </p>
      <!-- <hr > -->
    </div>
  </div>
      <!---== First Stats Container ====--->

    <!---== Second Stats Container ====--->
  <div class="container mx-auto pr-4">
    <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-[#243757] flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">Absen</p>
      </div>
      <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5">0</p>
      <!-- <hr > -->
    </div>
  </div>
    <!---== Second Stats Container ====--->

  <!---== Third Stats Container ====--->
  <div class="container mx-auto pr-4">
    <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-[#364765] flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">Data</p>
      </div>
      <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5">0</p>
      <!-- <hr > -->
    </div>
  </div>
  <!---== Third Stats Container ====--->

  <!---== Fourth Stats Container ====--->
  <div class="container mx-auto">
    <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-[#4F5F79] flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">Account</p>
      </div>
      <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5"> <?php echo $totalAcount[0]['total']?>
      </p>
      <!-- <hr > -->
    </div>
  </div>
  <!---== Fourth Stats Container ====--->
</div>
<!---===================== FIRST ROW CONTAINING THE  STATS CARD ENDS HERE =============================-->

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php");

$user_id = $_SESSION['user_id'];
$role_name = $_SESSION['role_name'];

if ($role_name !== 'karyawan') {
    $reports = query("SELECT reports.*, users.name FROM reports JOIN users ON users.id = reports.user_id");
} else {
    $reports = query(
        "SELECT reports.*, users.name FROM reports JOIN users ON users.id = reports.user_id WHERE user_id = '$user_id'"
    );
}

?>


<div class="relative overflow-x-auto sm:rounded-lg mt-10">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500" id="pagination-table">
        <thead class="text-xs text-white uppercase bg-[#0B1D45]">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Sender
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Created at
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <?php if ($role_name !== 'karyawan') : ?>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($reports)) : ?>
                <tr>
                    <td colspan="6" class="bg-[#243757] px-6 py-4 text-center text-white">
                        Data kosong
                    </td>
                </tr>
            <?php else :
                $no = 1;
            ?>
                <?php foreach ($reports as $report) : ?>
                    <tr class="bg-[#243757] hover:bg-[#0b1d45] border-b  text-white">
                        <td class="px-6 py-4 font-bold">
                            <?= $no++ ?>
                        </td>
                        <td class="px-6 py-4 font-bold">
                            <?= $report['name'] ?>
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                            <?= $report['title'] ?>
                        </th>
                        <td class="px-6 py-4">
                            <?= $report['created_at'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $report['status'] == 0 ?  "Not solved" : "Solved" ?>
                        </td>
                        <?php if ($role_name !== 'karyawan') : ?>
                            <td class="px-6 py-4 flex justify-start items-center ">
                                <?php if ($report['status'] == 0) : ?>
                                    <a href="#" onclick="confirmApprove('reports_approve', 'id', <?= $report['id'] ?>)" class="font-medium text-white hover:underline">
                                        <svg class="mr-4 w-4 h-4 md:w-5 md:h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </a>
                                <?php endif ?>

                                <a href="index.php?page=detail&id=<?= $report['id'] ?>" class="font-medium text-white hover:underline">
                                    <svg class="mr-4 w-4 h-4 md:w-5 md:h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                                    </svg>
                                </a>

                                <a href="#" onclick="confirmDelete('reports_delete', 'id',<?= $report['id'] ?>)" class="font-medium text-white hover:underline">
                                    <svg class="w-4 h-4 md:w-5 md:h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                    </svg>
                                </a>
                            </td>
                        <?php endif ?>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</div>

<?php
if (isset($_POST['submit'])) {
    handleFormSubmit($_POST, 'users', 'add');
}

if (isset($_POST['update'])) {
    handleFormSubmit($_POST, 'users', 'update');
}
?>