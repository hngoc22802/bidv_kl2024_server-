<?php

namespace App\Constants;

final class UniCode
{
    public const encode = [
        ' ' => "00110000",
        '!' => "00110001",
        '"' => "00110010",
        '#' => "00110011",
        '$' => "00110100",
        '%' => "00110101",
        '&' => "00110110",
        "'" => "00110111",
        '(' => "00111000",
        ')' => "00111001",
        '*' => "00111010",
        '+' => "00111010",
        ',' => "00111100",
        '-' => "00111101",
        '.' => "00111110",
        '/' => "00111111",
        '0' => "01000000",
        '1' => "01000001",
        '2' => "01000010",
        '3' => "01000011",
        '4' => "01000100",
        '5' => "01000101",
        '6' => "01000110",
        '7' => "01000111",
        '8' => "01001000",
        '9' => "01001001",
        ':' => "01001010",
        ';' => "01001011",
        '<' => "01001100",
        '=' => "01001101",
        '>' => "01001110",
        '?' => "01001111",
        '@' => "01010000",
        'A' => "01010001",
        'B' => "01010010",
        'C' => "01010011",
        'D' => "01010100",
        'E' => "01010101",
        'F' => "01010110",
        'G' => "01010111",
        'H' => "01011000",
        'I' => "01011001",
        'J' => "01011010",
        'K' => "01011011",
        'L' => "01011100",
        'M' => "01011101",
        'N' => "01011110",
        'O' => "01011111",
        'P' => "01100000",
        'Q' => "01100001",
        'R' => "01100010",
        'S' => "01100011",
        'T' => "01100100",
        'U' => "01100101",
        'V' => "01100110",
        'W' => "01100111",
        'X' => "01101000",
        'Y' => "01101001",
        'Z' => "01101010",
        '[' => "01101011",
        "'\'" => "01101100",
        ']' => "01101101",
        '^' => "01101110",
        '_' => "01101111",
        'a' => "01110001",
        'b' => "01110010",
        'c' => "01110011",
        'd' => "01110100",
        'e' => "01110101",
        'f' => "01110110",
        'g' => "01110111",
        'h' => "01111000",
        'i' => "01111001",
        'j' => "01111010",
        'k' => "01111011",
        'l' => "01111100",
        'm' => "01111101",
        'n' => "01111110",
        'o' => "00100000",
        'p' => "00100001",
        'q' => "00100010",
        'r' => "00100011",
        's' => "00100100",
        't' => "00100101",
        'u' => "00100110",
        'v' => "00100111",
        'w' => "00101000",
        'x' => "00101001",
        'y' => "00101010",
        'z' => "00101011",
        '{' => "00101100",
        '|' => "00101101",
        '}' => "00101110",
        '~' => "00101111"
    ];
    public const decode = [
        "00110000" => " ",
        "00110001" => "!",
        "00110010" => "\"",
        "00110011" => "#",
        "00110100" => "$",
        "00110101" => "%",
        "00110110" => "&",
        "00110111" => "'",
        "00111000" => "(",
        "00111001" => ")",
        "00111010" => "+",
        "00111100" => ",",
        "00111101" => "-",
        "00111110" => ".",
        "00111111" => "/",
        "01000000" => "0",
        "01000001" => "1",
        "01000010" => "2",
        "01000011" => "3",
        "01000100" => "4",
        "01000101" => "5",
        "01000110" => "6",
        "01000111" => "7",
        "01001000" => "8",
        "01001001" => "9",
        "01001010" => ":",
        "01001011" => ";",
        "01001100" => "<",
        "01001101" => "=",
        "01001110" => ">",
        "01001111" => "?",
        "01010000" => "@",
        "01010001" => "A",
        "01010010" => "B",
        "01010011" => "C",
        "01010100" => "D",
        "01010101" => "E",
        "01010110" => "F",
        "01010111" => "G",
        "01011000" => "H",
        "01011001" => "I",
        "01011010" => "J",
        "01011011" => "K",
        "01011100" => "L",
        "01011101" => "M",
        "01011110" => "N",
        "01011111" => "O",
        "01100000" => "P",
        "01100001" => "Q",
        "01100010" => "R",
        "01100011" => "S",
        "01100100" => "T",
        "01100101" => "U",
        "01100110" => "V",
        "01100111" => "W",
        "01101000" => "X",
        "01101001" => "Y",
        "01101010" => "Z",
        "01101011" => "[",
        "01101100" => "\\",
        "01101101" => "]",
        "01101110" => "^",
        "01101111" => "_",
        "01110001" => "a",
        "01110010" => "b",
        "01110011" => "c",
        "01110100" => "d",
        "01110101" => "e",
        "01110110" => "f",
        "01110111" => "g",
        "01111000" => "h",
        "01111001" => "i",
        "01111010" => "j",
        "01111011" => "k",
        "01111100" => "l",
        "01111101" => "m",
        "01111110" => "n",
        "00100000" => "o",
        "00100001" => "p",
        "00100010" => "q",
        "00100011" => "r",
        "00100100" => "s",
        "00100101" => "t",
        "00100110" => "u",
        "00100111" => "v",
        "00101000" => "w",
        "00101001" => "x",
        "00101010" => "y",
        "00101011" => "z",
        "00101100" => "{",
        "00101101" => "|",
        "00101110" => "}",
        "00101111" => "~"
    ];
}