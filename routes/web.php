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

Route::get("/enrolled_courses", [UserController::class, "enrolled_courses"]);

Route::post("/contact", [UserController::class, "saveContact"]);

Route::post("/saveCart", [UserController::class, "saveCart"]);

Route::post("/updateAddress/{id}", [UserController::class, "updateAddress"]);

Route::post("/updateAddress/{id}", [UserController::class, "updateAddress"]);