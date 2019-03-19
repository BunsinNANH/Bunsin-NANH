<div class="container mt-4">
    <div class="card">
    <div class="card-header"><h2 class="text-center">Quiz OOP</h2></div>
        <div class="card-body">
            <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form action="index.php">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" required name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="province">Province</label>
                                <input type="text" required name="province" id="province" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" required name="email" id="email" class="form-control">
                            </div>
                            <button type="button" class="btn btn-success" name="btn-send" id="btn-send">Send</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div id="ouputValue"> 
                            <?php include "getValue.php";?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>