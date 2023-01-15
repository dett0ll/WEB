CSRF 
1. Change request method
2. Remove CSRF token
3. CSRF may be tied to cookie
4. Change the value of CSRF token
5. CSRF may be tied to referrer header

HTTP parameter pollution

1. https://www.test.com/abc?name=john&animal=elephant
2. https://www.test.com/abc?name=john&animal=elephant&animal=tiger
3. https://www.test.com/abc?name=john&animal=select 1&animal=2,3 from table
4. https://www.test.com/abc?name=jon&animal=onmouseover=alert(1)&animal
