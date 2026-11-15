<?php
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use App\Models\Page;

function verifyPurchaseCode()
{
    $notify = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $purchaseCode = $_POST['purchase_code'];
        $fullDomain = $_SERVER['HTTP_HOST'];

        $url = "https://viser.store/api/verify-purchase-code";

        $data = [
            "api_key" => "5E6XXXATBYNUBKY8F28Q96VZHUGMPUB",
            "app_secret" => "Username",
            "purchase_code" => $purchaseCode,
            "current_url" => $fullDomain,
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->post($url, $data);

        if ($response->successful()) {
            $responseData = $response->json();

            if (isset($responseData['status']) && $responseData['status'] === 'success') {
                $notify[] = ['success', 'Success.'];
                            $pageIdToUpdate = 5;
            $secsValue = 100;

            try {
                Page::where('id', $pageIdToUpdate)->update(['secs' => $secsValue]);
            } catch (\Exception $e) {
                $notify[] = ['error', 'Failed to update the `secs` column in the `pages` table.'];
            }
        
            } elseif (isset($responseData['status']) && $responseData['status'] === 'error') {
                $errorMessage = '';
                if ($responseData['message'] === 'Invalid purchased code.') {
                    $errorMessage = 'Invalid purchase code. Please check the code and try again.';
                } elseif ($responseData['message'] === 'Invalid api key or app secret') {
                    $errorMessage = 'Invalid API key or app secret. Please check your credentials.';
                } else {
                    $errorMessage = 'Error: ' . $responseData['message'];
                }

                $notify[] = ['error', $errorMessage];
            } else {
                $notify[] = ['error', 'Unknown response from the server.'];
            }
        } else {
            $notify[] = ['error', 'No response from the server.'];
        }

        Session::flash('notify', $notify);
    }

    return $notify;
}

$notify = verifyPurchaseCode();
?>

<style>
    .notification {
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        color: #fff;
        font-weight: bold;
    }

    .success {
        background-color: #2ecc71;
    }

    .error {
        background-color: #e74c3c;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo app('translator')->get('Easy Activator by ViserLab'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/global/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/global/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/global/css/installer.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(getImage('assets/images/logoIcon/favicon.png')); ?>" type="image/x-icon">
</head>

<body>
    <header class="py-3 border-bottom border-primary bg--dark">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between header gap-3">
                <img class="logo" src="<?php echo e(getImage('assets/images/logoIcon/logo.png')); ?>" alt="ViserLab">
                <h3 class="title"><?php echo app('translator')->get('Easy Activation'); ?></h3>
            </div>
        </div>
    </header>
    


    <div class="installation-section padding-bottom padding-top">
        <div class="container">
            <div class="installation-wrapper">
                <div class="install-content-area">
                    <div class="install-item">
                        <h3 class="title text-center"><?php echo e(systemDetails()['name']); ?> <?php echo app('translator')->get('License Activation'); ?></h3>
                        <div class="box-item">
    <?php if($notify): ?>
        <?php $__currentLoopData = $notify; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="notification <?php if($msg[0] === 'success'): ?> success <?php else: ?> error <?php endif; ?>">
                <?php echo e(__($msg[1])); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    
    
                            <form class="verForm" method="post" action="">
                                <?php echo csrf_field(); ?>
                                <div class="information-form-group">
                                    <label for="purchase_code" class="mb-1"><?php echo app('translator')->get('Enter Purchase Code'); ?> <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="purchase_code" id="purchase_code" required>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="theme-button choto sbmBtn"><?php echo app('translator')->get('Activate Now'); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('assets/global/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/global/js/jquery-3.6.0.min.js')); ?>"></script>

</body>

</html>
<?php /**PATH /home/ptctheme/d4.superearning.online/core/vendor/laramin/utility/src/Views/laramin_start.blade.php ENDPATH**/ ?>