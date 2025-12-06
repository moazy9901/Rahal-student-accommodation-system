import { CommonModule } from '@angular/common';
import { Component, signal } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';

@Component({
  selector: 'app-hero',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './hero.html',
  styleUrl: './hero.css',
})
export class Hero {
  searchQuery = signal('');

  constructor(private router: Router) {}

  onSearch() {
    const keyword = this.searchQuery();
    if (keyword.trim()) {
      this.router.navigate(['/search'], { queryParams: { keyword } });
    }
  }
}
