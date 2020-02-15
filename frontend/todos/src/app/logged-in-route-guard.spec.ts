import { TestBed } from '@angular/core/testing';

import { LoggedInRouteGuard } from './logged-in-route-guard.service';

describe('LoggedInRouteGuard', () => {
  let guard: LoggedInRouteGuard;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    guard = TestBed.inject(LoggedInRouteGuard);
  });

  it('should be created', () => {
    expect(guard).toBeTruthy();
  });
});
