<?php

namespace Data;

interface Car
{
  function drive(): void;
  function getTire(): int;
}

class Avanza implements Car
{
  function drive(): void
  {
    echo "Drive Avanza";
  }

  function getTire(): int
  {
    return 4;
  }
}
