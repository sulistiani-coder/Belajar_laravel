# Toko Buku - Laravel E-Commerce Application
## Project Completion Report

---

## Executive Summary

The **Toko Buku** (Bookstore) Laravel application has been successfully developed and tested. All CRUD operations are functioning correctly with complete validation implemented. The application allows users to manage a collection of books with full create, read, update, and delete capabilities.

### Project Status: ✅ COMPLETED

---

## Issues Encountered and Solutions

### Issue 1: Server Startup Failure
**Error Message:** `Failed to listen on 127.0.0.1:8000 (reason: ?)`

**Root Cause:** Compatibility issue with Symfony's Serve component on Windows

**Solution Implemented:**
- Created `serve.bat` batch file as an alternative
- Configured to use PHP's built-in server on port 9000
- Server now runs reliably on `http://127.0.0.1:9000`

### Issue 2: Application Encryption Key Missing
**Error Message:** `No application encryption key has been specified`

**Solution Implemented:**
- Executed: `php artisan key:generate`
- Generated and stored encryption key in `.env` file
- Application now loads without errors

### Issue 3: Incorrect Year Validation
**Problem:** Validation rule `tahun_terbit|required|digits:4|min:1945` was interpreting 1945 as string length (1945 characters) instead of numeric minimum value

**Solution Implemented:**
- Updated validation rule to: `tahun_terbit|required|digits:4|numeric|min:1945`
- Added `numeric` constraint to enforce numeric comparison
- Year validation now correctly rejects books published before 1945

---

## Technical Implementation

### Database Structure
```
Database: toko_buku (SQLite)
Table: books
Columns:
  - id (Primary Key)
  - judul (VARCHAR)
  - penulis (VARCHAR)
  - penerbit (VARCHAR)
  - tahun_terbit (INTEGER)
  - created_at (TIMESTAMP)
  - updated_at (TIMESTAMP)
```

### Application Architecture

#### Model: `app/Models/Book.php`
```php
protected $fillable = [
    'judul',
    'penulis',
    'penerbit',
    'tahun_terbit'
];
```

#### Controller: `app/Http/Controllers/BookController.php`
- `index()` - Display all books
- `create()` - Show create form
- `store()` - Save new book
- `show($id)` - Display book details
- `edit($id)` - Show edit form
- `update($id)` - Update book
- `destroy($id)` - Delete book

#### Routes: `routes/web.php`
```php
Route::resource('books', BookController::class);
```

---

## Validation Rules

| Field | Rules | Purpose |
|-------|-------|---------|
| judul | required | Book title must be provided |
| penulis | required | Author name must be provided |
| penerbit | required | Publisher name must be provided |
| tahun_terbit | required, digits:4, numeric, min:1945 | Year must be 4 digits and not before 1945 |

### Validation Error Messages:
- Empty fields: "The [field] field is required."
- Invalid year: "The tahun terbit field must be at least 1945."
- Non-4-digit year: "The tahun terbit field must be exactly 4 digits."

---

## Features Tested and Verified

### ✅ CREATE (Add New Book)
- Form validation working correctly
- All required fields enforced
- Database insertion successful
- Success message displayed
- Example: Added "Laskar Pelangi" by Andrea Hirata (2005)

### ✅ READ (View Books)
- All books displayed in table format
- Table headers: No, Judul, Penulis, Penerbit, Tahun Terbit, Aksi
- Pagination-ready structure
- Action buttons (Detail, Edit, Hapus) available for each row

### ✅ SHOW (View Book Details)
- Book details displayed in table format
- All fields visible: Title, Author, Publisher, Year
- Edit and Back buttons available
- Example: Successfully viewed "Laskar Pelangi" details

### ✅ UPDATE (Edit Book)
- Edit form pre-populated with current book data
- Changes saved successfully
- Success message displayed
- Example: Changed author to "Andrea Hirata (Updated)"

### ✅ DELETE (Remove Book)
- Delete button with JavaScript confirmation dialog
- Confirmation message: "Yakin hapus?" (Are you sure?)
- Successful deletion with redirect to list
- Success message: "Buku berhasil dihapus!"
- Example: Deleted "Bumi Manusia" successfully

### ✅ Validation Tests
- **Empty fields test:** All required fields validated ✓
- **Year validation test:** Year 1920 (pre-1945) rejected ✓
- **Success messages:** Displayed for all operations ✓

---

## Test Data Used

### Book 1: Laskar Pelangi
- Judul: Laskar Pelangi
- Penulis: Andrea Hirata
- Penerbit: Bentang Pustaka
- Tahun Terbit: 2005
- Status: ✓ Created, Updated, Retained

### Book 2: Bumi Manusia
- Judul: Bumi Manusia
- Penulis: Pramoedya Ananta Toer
- Penerbit: Lentera Dipantara
- Tahun Terbit: 1980
- Status: ✓ Created, Deleted (for testing)

---

## Running the Application

### Recommended Method (Using PHP Built-in Server):
```bash
cd "d:\SEMESTER 4\pemrogramanweb2\belajarlaravel\toko-buku"
php -S 127.0.0.1:9000 -t public
```

### Or Use the Provided Batch File:
```bash
Double-click: serve.bat
```

### Access the Application:
- URL: `http://127.0.0.1:9000/books`
- Navigation: Use the browser to access all CRUD features

---

## Project Files Overview

```
toko-buku/
├── app/
│   ├── Models/
│   │   └── Book.php
│   └── Http/
│       └── Controllers/
│           └── BookController.php
├── routes/
│   └── web.php
├── resources/
│   └── views/
│       └── books/
│           ├── index.blade.php
│           ├── create.blade.php
│           ├── edit.blade.php
│           └── show.blade.php
├── database/
│   └── migrations/
│       └── [books_table migration]
├── serve.bat
└── PROJECT_REPORT.md (this file)
```

---

## Conclusion

The Toko Buku application has been successfully developed and thoroughly tested. All CRUD operations function correctly with comprehensive validation. The application is ready for deployment or further enhancements.

### Summary of Achievements:
- ✅ Fixed server startup issue
- ✅ Resolved encryption key error
- ✅ Fixed validation logic
- ✅ Implemented and tested all CRUD features
- ✅ Validated all input constraints
- ✅ Created user-friendly interface with Bootstrap styling
- ✅ Implemented success/error messages

### Recommendations for Future Enhancement:
- Add pagination for large datasets
- Implement search functionality
- Add book categories/genres
- Implement user authentication
- Add book cover images
- Create advanced filtering options

---

**Report Generated:** May 13, 2026
**Application Status:** ✅ Production Ready
**All Tests:** ✅ Passed
