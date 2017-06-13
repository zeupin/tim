@if exist _settings.scss del _settings.scss
dir /b /s /t:c /o:d .\modules\*.settings.scss>_tmp.txt

@if exist _settings.scss del _settings.scss
for /f %%f in (_tmp.txt) do (
  echo.@import "%%f";>>_settings.scss
)