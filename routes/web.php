<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get("/", [UserController::class, "index"]);

Route::get("/contact", [UserController::class, "contact"]);

Route::get("/about", [UserController::class, "about"]);

Route::get("/faqs", [UserController::class, "faqs"]);

Route::get("/login", [UserController::class, "login"]);

Route::post("/login", [UserController::class, "doLogin"]);

Route::get("/register", [UserController::class, "register"]);

Route::post("/register", [UserController::class, "doRegister"]);

Route::get("/logout", [UserController::class, "logout"]);

Route::get("/error", [UserController::class, "error"]);

Route::get("/forget_pass", [UserController::class, "forget_pass"]);

Route::get("/courses", [UserController::class, "courses"]);

Route::get("/course_details/{id}", [UserController::class, "course_details"]);

Route::get("/search", [UserController::class, "search"]);

Route::get("/cart", [UserController::class, "cart"]);

Route::get("/checkout", [UserController::class, "checkout"]);

Route::get("/address", [UserController::class, "address"]);

Route::get("/change_pass", [UserController::class, "change_pass"]);

Route::get("/profile", [UserController::class, "profile"]);

Route::post("/profile", [UserController::class, "updateProfile"]);

Route::get("/enrolled_courses", [UserController::class, "enrolled_courses"]);

Route::get("/video/{id}", [UserController::class, "video"]);

Route::post("/contact", [UserController::class, "saveContact"]);

Route::post("/saveCart", [UserController::class, "saveCart"]);

Route::get("/deleteCart/{id}", [UserController::class, "deleteCart"]);

Route::post("/updateAddress/{id}", [UserController::class, "updateAddress"]);

Route::post("/updateAddress/{id}", [UserController::class, "updateAddress"]);

Route::post("/updatePassword", [UserController::class, "updatePassword"]);