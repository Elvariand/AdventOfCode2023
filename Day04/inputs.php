<?php

$trial = "Card    1: 41 48 83 86 17 | 83 86  6 31 17  9 48 53
Card     2: 13 32 20 16 61 | 61 30 68 82 17 32 24 19
Card   3:  1 21 53 59 44 | 69 82 63 72 16 21 14  1
Card  4: 41 92 73 84 69 | 59 84 76 51 58  5 54 83
Card 5: 87 83 26 28 32 | 88 30 70 12 93 22 82 36
Card 6: 31 18 13 56 72 | 74 77 10 23 35 67 36 11";

$trial2 = "";

$input = "Card   1: 47 10 77 75 94 50 93 43 27 18 | 73 75 32 65 98 76 71 13 50 78 54 94 18 83 77  6 79 93 45 27 87 57 51 55 43
Card   2: 17  9  7 91 32 97 76 39 83 88 | 88 25 46 50 91 18 39 76 17 22 28 82 44 66 52  7 11 56 77  9 40 83 97 32 47
Card   3: 32  2 10 96 30 37 60 86 88 50 | 64 96 58 41 24 37 86 84 80 49 30 53 83 50 42 33  2 52 88 46 19 89 32 51  5
Card   4: 62 21 85 90 64 44 29  2 86 84 | 98 21 82 55 62 14  3 33  7 90 85 57 94 44 64  5 43 91 96 67 84 78 69 81 29
Card   5: 85 28 74 24 52 88 22 50 66 61 | 93 43 52 91 66 88 53 82 87 22 47 69 74 28 50 85 83 24 42 23 46 61 76 37 41
Card   6: 79 36 65  7 77 38 57 68 59 80 | 83 67 80 77 47  4 42 22 54 79 66 57 98 84 41 65 86 61 38 63  7 36 31 59 68
Card   7: 69 27 99 35 40 53 13 32 15 28 | 51 15 25  6 69  4 11 34 99 78 40 53 68 97  3 76  9 72 82 74 13 83 30 35 42
Card   8: 94 25 10 47  2 50 17 27 88 23 | 47 61 48 10 45 23 96 88 80 30 58 53 50 33 12 25 41 17 28  2  7 27  5 49 94
Card   9: 21 61  7 78 50 53 25 36 80 26 | 30  6 77 16 61 99 54 23 86 26 56 21 43 42 20 36 80 53 73  4  5 78 96 57  7
Card  10: 13  7 64 98 19 16 77 55 80 15 | 24 64 71 13 14 79 76 34 43 40  1 91 68 56 19 52 75 63 55 89 74 22 45 92 77
Card  11: 18 53 37 44 72 92  6 85 46 29 | 62 27 16 31 76 91 60 46 36 44 85 49 59 98 73 25 15 53 67 10 61 58 50 77 32
Card  12: 12 80 86 59 33 82 81 89 97 42 |  6 22 70 64 62 88 27 25 60 56 36 19 96  4 98 66 71 76 94 57 11 15 55  3  7
Card  13: 68 57 80 11 42 56 98 63 61 95 | 68 12 21 93 53 50 80 63 72 42 98 57 34 44 95 43 74 58 17 94 11 23 40 79 31
Card  14: 82  6 65 18 67  3 48 81 28 96 | 96 71 25  8 81 38 97 19 82 67 78 48 36  3 18 30 28 94 31 29  6 20 41 16 76
Card  15: 77 46 11 22 70  1 47 67 57 23 | 88 35 37 81 26 27 10 82 75 14 97 93 41 80 12 49 94 24 89 64 87 45 28 17 42
Card  16: 40  9 49 69 59 25 37 91 27 11 | 91 27 84 37 64 86 68 33 36 69  8 75 34 47 80 71  5  9 93 23 31 29 51 82 88
Card  17: 96 50 25  6 90 67 27 98 99 88 | 79 80 16 49 39 43 71 83 82 78 40 89 54 50 38 66 86 28 55 56  6 35 74 29 23
Card  18: 61 30 69 53 76 32 29 45 26 79 | 60 69 82 78 31 72 91 13 92 40 24 54 25 14 22 87 70 35 18  7 96 86 49 15 66
Card  19: 22 15 99 66 94 96 59 69 91 24 | 15 34 13 78 21 32 89  8 25 93 16 97 31 24 67 85 46 53  9 81  7 83 33 28 79
Card  20:  4 96 82 86 40 24 99 72  6 50 |  6 56 29 77 76 18 48 20 45 80 46 60 81  5 19 55 94 27  9 64 53 12 82 79 83
Card  21: 25 54 50 91 12 14 99 17 21 60 | 94 45 83 79 66 81 31  8 53 26 65  2 62 88 22 43 52 40 18 70 37 15  6 61 50
Card  22: 24 87 19  1 91 23 18 29  3 15 | 54  9 31 92 81 71 25 76 65 45 21 47 17 32 56 30  5 84 20 58 50 11 99 79 42
Card  23: 10 59  1 14 55 72 41 65 92 85 | 99 50 83  3 97 66 33 32 91 40 25 62 78  7 31 90 77 93 43 79 96 86 57  5 48
Card  24: 95 26 66 37 10 79 93 30 31  2 | 31 56 88 19 89  5 33 40 58 79 93 96 78  1 62 65 85 67 70 24 43 75 66 27 38
Card  25: 42 73 24 97 78 95 67 81 59 88 | 15 96 55 60 97  4 67 98 95 21 73 19 57 24 58 82 61 99 31 70  9 91 78  2  1
Card  26: 40 64 83  9 50 49  2  6 36 52 | 67 64 79  6 27 85 34 36  5 83 92  4 58 68  7 75 14 94 28 76 37 97 26  8 33
Card  27: 49 82 22 26 57 95 91 37 53 55 | 82 58 75 12 53 13 26 41 55 40 22 71 91 30 80 88 57 49 37 73 96 95 10 76 21
Card  28: 82 10 94  1  7  4 13 66  2 99 | 30 68 54 85 12 23 96 36 33 61 38 75  7  5 74 10 48  2 42 66 98 70 89 55 97
Card  29: 60 99 69 43 54 26 39 34  3 70 | 78 93 63 89 91 42 56 11 77 71 73 86 82 70 65 54 27 99 85 29 61 72 37 39 96
Card  30: 43 59 42 61  6 19 69 13 83 56 | 19 35 29 89  7 83  3 90 84 48 34 33 17  2 94 12 44 70 62 51 32 36 58 63 81
Card  31: 18 48 58 97 80 14 24 91 55 88 | 28 34 86 55 50 17 14 54 84 80 48 93 38 58 23 88 15 96 97 56 31 59 91 61 24
Card  32: 75 70 54 21 43 11 60 48 55 17 | 86 75 34 68 11 35  4 25 54 14 90  6 20  1 70 33 49  7 17 87 16 24  9 77 44
Card  33:  4 14  9 60 55 84 91  6 51 56 | 65 40 81 98 58 76  9 60 51 75  2 39 55 15 62 26 88 84 12  7 83 67 91  4 38
Card  34: 24 43 34 86 93 61 76 29 46 15 | 64 59 62 88 21 72 34 44 27  9  8 48 82  2 63 66 98 33  3 97 68 93 65 60 87
Card  35: 78 87 30 41 55 62 82 79 95 19 | 47 60 92 11 31 13 21 43  2 12 91 76 74 51 15 24  9 32 18 85 98  1 35 42 34
Card  36: 13 76 89 25 41 96  1 29 77 35 | 45 81 17 33  5 87 73 92 53 75 14 79 27  1 34 13 11 24 62 26 68 12 23 54 88
Card  37: 87 95 57 77 21 79 93 47 72 99 | 71 28 33  7 90 30 19 76 34 35 77 98 87 51 83 24  3 60 80 52 53 13 55 16 69
Card  38:  8 74 16 51 45 10 41 13 89 90 | 38 35 56 29 46 59 69 27 63 72 20 83 51  4 77 87 75 12 67 26 85 62 30 37 43
Card  39: 33 25 24 89 79 50 72 45 88  6 | 66 37 12 10 43 51 55 40 36 52 94 62 60 85 97 72 22 59 82 80 29 39 70 57 48
Card  40: 53 10 41 67 62  9 88 33 55 61 | 43 86 29 93 15 26 74 95 94 56 90 47 89 92 19 82 81 20 97 57 37 73  3 63 18
Card  41: 82 39 81 58 32  5 40  6 38 96 | 68 60 38 74 66 49 58 28  6 90 53  5 95 50 82 18 67 13 83 76 35 81  3 10 20
Card  42: 62 59 54 92 60  7 73 27 99 44 | 42 13 62 35 50 17  8  4  2 76 88 61 69 85 46 65 36 79 29 59 81 58 51 77 66
Card  43: 13 23 30 91 59 66 77  1 57 82 | 19 40 54 23 64 70 44 11 34 29  7 91 20 56 93  9 42 28 72 92 46 15 68 95 39
Card  44: 19 20 44 89  5  7 80 55 76 11 | 39 83 13 21 58 80 24 52 47 60 66 92 89 96 88 56 10  5 51 76 36 91 26 98  4
Card  45: 97  7 13 59 20  5  6  3  9 51 |  6 20 64 59 37 31  9 72 57 69 42 15 35 76 24 10 18  3 17 39 97 70 13 34  7
Card  46:  6 95 11 77 79 47 88 21 23 49 | 42 21 95 50  1 11  6 58 66  8 85 88 28 30 23 10 79 16 47 78 90 77 61 80 92
Card  47: 66 32 19 44  9 77 73 97 24 25 | 37 77 82 24 51 73 83 28 19 43 65 55 48 95 75 27 15 25 89 17 40  1 18 49 97
Card  48: 35 40  5 36 23 22 27 85 41 65 | 51 52  7 92 31 33 86 48 21 84 72 91 62 66 53 24 77 99 14 11 69 16 34 47 20
Card  49: 35 61 25 50  8 77  3 65 89 92 | 48 53 80 89 19 96 83 21 38 52 23 60 81 37 73 94 14 41  5 44 31 15 79 86  8
Card  50: 40 15 56 68 38 87 92 70 19 42 | 18  9 78 62 77 33  3 35 52 72 26 39 17 86 85 22 66 34 98 40 61 94 81 32 23
Card  51: 36 67 40 89 50 69 33 64  7 74 |  5 66 78 53 52 34 87 70 60 49 82 25 35 37 28 15 10 45 39 83 71 57 61 95 29
Card  52: 65 75  5  1 74 97 16 59 40 15 | 43 95 57  1 66 41 92 45 70 77 72 68 30 23 42 29 60 48 28 14 32 64 79 90 11
Card  53: 48 86 32 97  6 50 93 95 55 19 | 47 63 64 62 46 33 97 69 61 67 87 98 78 94 74 34 18 21 54 15 60 37 84 30 11
Card  54: 51 25 46 18 84 16  1 19 22  7 | 93 59 75 58 92 12 73 90 82 72  4 49 91 76 26 67 97 95 20  5  9 11 17 21 70
Card  55: 15 52 93 67  6 31  7 53  5 46 | 80 54 36 19 60 12 21 49 88  9  3 84  4 85 50 51 20 79 98 42 87 77 22 75 30
Card  56: 17 12 84 50 20 25 48  7 94  4 |  4 66 18 34 39 27  8 11 15 25 90 57 85 33 88 48 12 53 84 17 20 21 28 52 60
Card  57:  8 97 61 38 88 34 51 45 55  1 | 16 56 62 36  8 50 35 15 27 11 31 32 49 66 83 64 97 99 17 92 91 14  5 82  1
Card  58: 14 23 12 38 87 13 45 66 64 56 | 38 33 51 94  1 64 70 24 31 14  2 75 12 67 85 23 13 74 56 15 42 95 73 96 52
Card  59:  1 99 10 58 91 73 34 76 57  9 | 64 80 94 20 65 12 21 14 93 29 56 75 84 68 55 19 13  4 31 66 85 88  5 95 28
Card  60:  7 41 65  5 73 68 53  4 51 18 | 53 68 18  5 34 50 44 85 41 65  3 39 55 16 75 29 73  7 14 27  4 54 57 82  2
Card  61: 79 84 69 62 35 88 16 97 95 47 | 88 84 35 69 15 59 62 63 34 79 39 12 17 14 10 67  2 90 30 95 82 58  6 43 16
Card  62: 93 80 31 98 88 62 68 47 84 25 | 46 49 28 81 56 33 74 76 69 27 96 53 89 44 20 23 10 94 45 13 87 60 90 21 97
Card  63: 54 91 82  4 42  9 26 11 83 76 | 67 70 36 84 54 25 81 20 52 34 76 96 43 41 92 58 61 26 87 23 29 83 91  9 30
Card  64: 87 93 18 98 56 19 99 95 49 38 | 72 74 16 47 44 39 40 18 76 50  7 73 71 11  3 68 78 14 96 80  6 46 19 77  9
Card  65: 58 53  4 85 70 76 93 31 50 20 |  8 83 68 52 31 46 96 91 86 39 92 88 63 53 20 15 11 29 87 65 93  3 89  1 74
Card  66: 48 27 73 67 97 68 69 22 77 56 | 18 70 38 59 10 82 93 39 48 90 57 43 34 89 98 13 97 69 80  4 41 85 25 86 61
Card  67: 40 18 44 16 15 49 97 77 88  7 | 93 82 90 20 75 68 71 42 53 11  8 41 99 96 59 67 60 14 94  9  5 26 56 80 65
Card  68: 37  5 49 35 97 95 59 80 83 47 | 78 36 32 64 92 77 81 67 69 28 99 40 86  7 93 88 14 15 91 16 89 52 18 30 62
Card  69: 36 90 70 74 55 85 97 19 33 87 | 78 93 86 85 69 43 45 80 56  3 92 76 81 32 29 42  4 94 71 47 26 64 30 67 57
Card  70: 45 18 12 66 47 95 35 86 23 20 | 40  9 50  2 93 55 91 34 44 37 98 99 73  7  6 64 48 88 26  8 53 54 14 90 61
Card  71: 87  8 90 48 28 63 91 74 33 24 | 79 95 72 76 32 88 15 20 97 16 51  7 46  3 61 31 82  4 59 68  8 17 23 86 54
Card  72: 80 56 58 70  4 40 59 23 84 75 | 69 93 58 27 35 39 78 80 20 72 40 75 84 56  4  8 59 24 70 85 23 46  2 14 26
Card  73: 24 56  1 99 35 55 17 16 43 30 | 32 16 55  3 82 99 27 30 61 49 71 24 75  4  1 25 17 41 74 56 31 35 93 43 40
Card  74: 57 29 11 16 53 58  5 34 27 13 | 27 60  6 94 72 53 85 84 29 16 57 39 38 58 34 82 48 63 37 32 11 31 83  5 13
Card  75: 81 35  4 37 10  6 46 79 90 82 | 79 90 27 65 10 47 58 40 94 49 32 28 30 38  4 21 35 83 33 69 14 81 12 76 46
Card  76: 19 84 41 77 53 75 95  8 91 20 | 85 79 55 51 75 26 41 71 73 20 59 18 91 58 19 95 84 72 61 42 77  8 53 87 22
Card  77: 94 34 58 52 28 98 82 22  2 72 |  1 92 34 82 38 12 66  7 55 35  2 48  3 31 22 94 72 85 58 69 16 98 28 52 59
Card  78: 43 47 16 28  1 18 11 20 19 96 | 44 16 76 36 81 52  6 28  2 42 37  7 98 95 46 47 11 94  4 54 97 70 10  9  1
Card  79:  6 35  7 27 44 18 94 34 52 97 | 43 54  6 44 60 77 41 82  7 69 46  9 11 38 94 63 51 86 91 79 27  3 47 31 42
Card  80: 99 38 24 63 71 86 79 67 55 72 | 10 37 22 99 54 55  9 13  6 79  1 71 63 51 44 86 92 26 72 53 38 16 24 27 67
Card  81: 10  6 84 21 83 18 76 57 16 23 | 76 64  8 21 84 56 29 65 54 10 18 93 44 13 87 83 57 79 85 23 16 22  1  6 33
Card  82: 33 61 13  7 41 72  6 65 11 69 | 19 46 24 41 67 62 13 63 54 25 17 49 78 14 60 55 69 72 36 27 86 89 38 94 51
Card  83:  5  4 18 30 87 93 55 12 97  8 | 63 24  8 18 93 12 87  9  5 60 37 44 52  4 64 23 32 66  3 46 35 77 85 75 28
Card  84: 40 77 51 35 61 11 12 33 60 72 | 30 12 16 33 60 77 55 35 92  9 51 29 40 56 26 53 61 46 95  2 50 68 20 14 34
Card  85: 47 58 90 56 28 35 64 57 69 77 | 14 83 77 62 73 78 28 48 44 71 57 87 93 90 47 66 35 65 18 76 99 39  5 81 49
Card  86: 40 74 61 11 26 64 67  2 13 70 | 40 88 14 70 37 21 73 64 32 45 23 33 24 13 60 74 31 27 67  2 65 26 16 61 57
Card  87: 45 94 63 27 82 18 68 69 29 34 | 99 17 88 87 12 30  2 35 55 71 22 77  7 50 97 90 85 79 83 38 91 74 29 28 96
Card  88: 31 12 81 85 87 69 35 21 86  2 | 64 57 41 69 91 80 39 87 71 13 65 23  2 35 40 85 20 76 12 44 21 60 68 50 47
Card  89: 34 48 66 99 75 43  1 64 97 21 | 75 77  3 23 50 20 34 25 96 88 63 99 68  5 24 19  4 45 38  8 79 52 37 16  9
Card  90: 83 39 32 78  4 15 70 98 90 10 | 47 51 83 67 90 69 91 23 66 13 32 55 63  9 54 21 85 93  3 59 28 29 84  2 60
Card  91: 92 64 79 67 34 25 88 98 27 46 | 58 33 31 27 65 70 29 46 57 43 63 87 89 67 80 39 97 37 19 55 45 92 95  7 14
Card  92: 69 77 82 21 11 33 15 65 79 48 | 94 80 19 72 39 63 89 85 74 34 17 92 59 79 54 98 48 96 76 46 84 40 35 93 24
Card  93: 81 78 54 59  4  3 15 96 18 43 | 55 48 22 32  5  4 33  9 37 17 23 97 75 66 85 86 16 88 56 51 26 31 80 20 38
Card  94: 57 25 66 34 55 11 44 86 62 79 |  9 98 94  6 55 97 49 54 83 73 90 84 37 81 95 13 53 10 63 96 82 80 26 33  8
Card  95: 94 98 23 50 71 30 66 52 13 35 | 88 96 79 83 55 53 76 32 63 44 40 92  8 78 20 74 72 85 31 67 97 34 14 19 87
Card  96: 41 39 92 64 83 89 50 57 69 74 | 59 34 61 39 12 24  1 55 98 77 45 72 22 30 23  2 50 53 36 85 75 87  9 14 69
Card  97: 37 96 74  8 53 91 81 57 15 27 | 81 57 50 86 74 27 40  8 15 97 53 64 55 96 37 84 41  6 89 34 91 61 56 72 82
Card  98:  9 73  6 91 46 70 20 39 76 60 | 70 73 57 72 74 35 47 91 46 20 39  6  2 44 60 63 49 27 82 43 12 76 88 54  9
Card  99: 69 56  9 62 73 22  6 71 90 68 | 62 15  9 55 71 18 73 68 86 93 57 69 56 67 77 97 31 58 99 64 60 48 34 90 59
Card 100: 76  2 39 75 21 36 64 44 10 97 |  8 72 34 65 42 84 75 95 73 21 63 51 58 10 27 86  3  5 14 88  2 67 26 46 36
Card 101:  1 83 64 92 20 30 49  3 14 77 | 77  8 57 40 92 65 19 71 20 60 76 30 27  6 84 22 90  3  5  9 95 12  2  1 15
Card 102: 95 20 96 69  2 34 26 17 29 88 | 19 75 60 96 27 46 13 57 45 55  2 69 84 17 71 47  3 25 87 29 30 42 90 16 62
Card 103: 46 61  4 25 84 69 32 47  8 77 | 28 66 19 46 75 22 25 76 99 34 73 71 29 42 69  1 78 97 40 55 82  7 20 14 94
Card 104: 73 76 71 83 72 48 53 25  3 30 | 30 34 95 48 35 32  4 53 17 23 56 19 76 81 47 79  5 87 71 57 49 11 40 85 66
Card 105: 42 35 23 17 82 71 70 49  6 34 | 42  3 52 80 12 67 38 91 70 86 35 27 97 30  6  2 13 84 78 71 36 83 53 17 49
Card 106: 65 91 58 56 23 14 60 28 76 22 | 41 59 72 48 96 63 71 80 57 16 47  6 82 70  3 14 24 44 25 17 55 62 32 53 79
Card 107: 73 21 20  1 65 70 71 75 26 36 | 84 98 96 41 78 50 77  8 57  6 32 47 30 67 53 69 33 24 66 56 68  5 23 91 35
Card 108: 68 89 44 27 20 46 82 90 81 69 | 53  2 24 92 68 80 54 65 36 87  8 39 47 78 57 44 81 77 71 85 55 13 14  5 89
Card 109: 99 87 17 66 48 27 19 23 25 33 | 64 23 36 46 75 94 71 39 74 48 38  1 95 89 86 13 45 58 30 57 63 43 44 97 33
Card 110: 35 33 46 99 66 50 59 78 62 86 | 66 12 90 41 54 19 72 67 29 58 39 73 80 10 23 63 93  5 62 81 46  4 30 16 26
Card 111: 48  4 99  3 13 46 35 28 32 85 | 38 15 64  1 68  8 29 59 86 80 53 83 24 47 57 91 67  5  9 74 44 78 55 21 36
Card 112: 28 10  6 94 76 20 84 97 60 41 | 15 13 99 69 50 29 74 24 58  4 21 57 11 86 32 95 42 62 47 90 38 54 83  9 67
Card 113: 19 44 35 68 47 70 96 16 36 94 | 37 40 42 89  6 50 57 26 75  8 91  9 76 38 17 24 14 83 41 55 34 29 97 99 98
Card 114: 77 33 74 50 52  8 24 61 29 13 | 13 77  8 62 24 60 74 98  1 33 29 58 45 50 63 52 17 61 32 51 75 35 73 38 95
Card 115: 62 87 49 55 12 30 47 17 22 89 | 10 35 62 45 51 20 85 80 66 12 17 89 36 87 30 47 33 72 55 63 49 67 22 95 70
Card 116: 10 12 84 89 21 70 86 62 38 43 | 30 38 84 21 34 86 44 16 14 12 62 43 89 70 96 78 83 10 80 37 19 23  9 91 45
Card 117: 65 51 27 90 58 98  7 47 75 76 | 11 86 31 34  1 85 14 64 74 82 95 15 84 81  2 78 50 83 92 87 63 24 91 33 59
Card 118: 46 74  1 92 51 91 60 84 11 59 | 46 38 98 26 36 90 84 55  1 11 74 91 45 59 14 18 67 51 60 92 49 71 15 79  5
Card 119:  1 86 29  4 43 12  7 20 56 87 | 93 41 34 33 51 97 72 83 26 50 77 99 71 82 23 35 45 30 67 25 79 27 38 81 53
Card 120: 22 55 82 98 13 34 91 75 39 26 | 96 10 47 35 86 19 42 14 70 39 71 75 84 27 40 58 25 87 80 18 67 57 78 26 93
Card 121: 84 35 54 23 87 74  3 57  7 69 | 57 88 82 47 60 38 43 39 23 37 74 84 31 66  1  7 87  3 28 92 54 78 35 14 69
Card 122:  1 16 58 29 45 37 56 60 46 40 | 76 58 33  3 55 19 46  1 96 87 34 29 60 45 37 63 89 22 21 56 67 83 93 40 30
Card 123:  7  6 97 47 48 15 42 20 93  4 |  6 24 44 48 87 59 63 42 23 43 85  7 79 53 26 30 90 29 89 45 97  5 64 15 86
Card 124: 34 77  3 95 14 23 83 48 91 72 | 99 69 74 64 38 12 80 57  1 63 21 67 46 84 26 85 97 94 81 33 52 35 24 47 86
Card 125: 14 59 35 37  9 63 77  6 80 75 | 28 76 68 62 27 93 54 69 34 61  9 71 53  3 82 52  1 14 47 11 98 74  7 92 10
Card 126: 85 92 51 13 29 22 27 91 94 57 | 69 70 72 91 33 27  6  1 35 58 52  9 13 99 22 41 73 49 53 83 89 15 76 10  5
Card 127: 46 51 98 42 61 95 11 16 80 82 | 41 73 80 96 12 75 24 13  2 46 81 10  5 68 91  8 35 93 98  6 17 61 19 72 62
Card 128: 79 45 88 14 72 84 85  5 32 43 | 21 89 60 61 25 69 17 59 32 93 19 68 63 72 84 85 64 23  5 26 18  6 10 38 81
Card 129: 24 57 63 94 78 65 76 75 32 30 | 64 44 22 49  1 90 12 83 14 77 38 47 36 91 28 88 53  4 57 21 13 27 74 18 37
Card 130: 76 56 65 72 71 45 48 79 17 98 |  6 87 41 72 18  3 19 15 70 68 35  2 79 73 24 20 43 80 82 76 27 97 12 45 96
Card 131: 91  9 71 67 13 42 32 25 35 17 | 18 33 76 38 25  9  7 17 28  6 82 72 97 71 83 56 49 77 64 47 52 44 19 43 65
Card 132: 11 54 19 87 15 99 71 64  1 27 | 94 58 59  3 20 84 23 97 21 65  5 45 50 18  4 91 56 26 47 44 12 39 96 92 64
Card 133: 18 69 28  8  3 70 91 45 44 12 | 96 84 93  1 11 79 27 21 22  3 14  4 98 44 92 10  7 89 72 88 95  9 13 78 55
Card 134: 68 26 45 86 13 90 67 58  2 44 | 29 34 83 68 99 21 38 76 14 54 85 89 40 47 23  9 93 79 66 10 52 87 17 53 19
Card 135: 41 75 16 84  5  4 61 40 65 73 | 90 74 48 92 51 66 54 39 21 95 80 94 86 81 67 91 36 79 88  8 87 33 28 31  9
Card 136:  9 43 12 63 35 86 78 77 67 28 | 78 86  9 95 22 28  4 23 12 13 63 59 71 35 85 34 92 38 69 24 43 77 55 67 18
Card 137: 76 83 70 79 84  1 95 22 62 10 | 61 76 97 66 22 89 42 95 99 70 44 14 79 10 51  1 59 47 78 62 55 83 84 88 68
Card 138: 62 68 98 25 34  9  3 19 99 22 | 16 95 12 22 34 71 10 77 45  7 20 81 43 83 37 56 88 99  6 30 80 82 13 69  3
Card 139: 75 17 24  2 25 87 27 83 50 33 | 25 31 33 21 83 46 64 24 56 72 32  9 17 66 27  2 48 90 87 50 55 97 75 96  1
Card 140: 81 98  1 28 10 31 50 15 78 63 | 51 63  1 14 50 57 35 59 33 78 10 98 32 28 15 75 65 22 53 31 81 71 47 44 68
Card 141: 96 75 89  6 77 55 44 29 52 57 | 44 16 93 42 87 31 52 88 39  2 73 66 43 41 37 25 48 89 83 92 61 60 67 18 58
Card 142: 63  9 92 56 15 84 93 57  1 18 | 86 34 44  5 68 20 28  8 89 55 61 12 60 40 64 97 13 36  3 62 54  4 99 19 76
Card 143: 57 92 23 95 63 85 32  1 25 48 |  1 80 69 61 10 92 27 32 25 60 15 13 57 49  8 40 98 97 23 63 48 85 18 95 86
Card 144: 92 96 49 21 53 63 10 97 66 48 | 63 66 96 85 82 23 34 21 71 37 89 43 65 22 10 88 53 40 45 92 27 41  1 97 58
Card 145: 90 15  2  9 34 11 25 48 42  1 | 25 11 49 34 36 40  8 92 59 58 15 43  9 16 90 46 88 57  1 17 48 50 42 14  2
Card 146: 97 23 22 37 27  5 46 80  3 94 | 30 16 81 58 62 74  3 69 41 11 31 71 53 93 35  2 21 28 82 75 65 63 64 79 80
Card 147: 46 58 16 89 43 71 52 90 21 99 | 67 38 69 58 97 12 37 65 35 51 90 75  3 50 40 32 60 88 93 28  5  7 62 99 57
Card 148: 22 20 33 81 37 28 89 52 10 93 | 57 15 45 73 39 30 37  1 60 81 36 46 13 89 21 80 44 82 75  5 85 92  3 38 74
Card 149: 18 90 28 71 17 16  9 82 55 63 | 65 13 10 61 27 71 11 85 84 31 23 75 45 52 76 72 81 50 39 91 41 19 28 32 53
Card 150: 92 27 25 30  1 97 65 75 86 32 | 29 56 41 34  5 54 23 76 52 46  8  3 77 18 68 95 28 73 44 69 79 98 96 61 93
Card 151: 80 13 68 48 89 49 75 78 62 60 | 64 59  3 63  1 51 14 46 22 26 96 90 99 32 23 38 92  4 49 84 58 34 54 77 33
Card 152: 54 57 60 71 27 80 94 72 38 93 |  6 46 54 58 21 57 48 72 51  7 50  8 75 91 71 30 94 24 56 20 27 36 22  9 26
Card 153: 98 84 55 72 17 57 97 25 71 90 | 45 28 75 55 17 31 23 49 80  9 67  6 91 89  2 96 81 84 10 98 25  4 13 27 50
Card 154: 62 83 82 13 53 33 87 66 75 42 | 10 40 32 48 91 69 88 51 41 68 99 72  7 86 25 71 80 17 11  1 79 38 58 93 36
Card 155:  5 93 54 98 87 69 26 43 45 12 | 23 79 28 11 40 34 41 76 80 47 10  5 88 26 64 86 54 55 84 35 17 42 24 72 75
Card 156: 29 98 36 30 70 93 56 10 58 52 | 16 44 53 92  6 51  7 75  5 35 28 87 69 12 27  1 46 97 82 94 90 99 91 41 23
Card 157:  9 28 65 17 75 68 31 87  4 58 | 40 96  6  7 88 45 24 34 72 38 23  8 99 14 53 66 61 16 67 11 80 79 56 83 52
Card 158: 87 80 45 78 39 11 58  4 94 99 |  7 32 17 82 53 51 63  3 22 36 97 27 91 21  1 18 60 52 86 48 15 95 38 14  8
Card 159: 57 24 80 35 13  1 51 95 14 20 | 14 41  8 53 81 32 89 31 37  5 30 44 73 51 70 95 49 57 88 20 15 27  2 58 50
Card 160: 90 99  1 24 64  2  5 72 45 77 | 79 32 46  3 91 29 48 77  2 26 68 99 17 64 22 14 41 92 89 44 83  7 45 74  8
Card 161: 20 90  1 94 51 38  7 52 25 17 | 36 73 17 91 25  1 31 51 35 84 94 20 42 52  4 92  7 60 38 22 69 66 90 10 30
Card 162: 60 82 68 54 36 49 59 55 53 24 | 88 48  3 15 86  9 24 20 80 73 49 97 37 82  2 68 84 39 81 59  4 36 74 89 69
Card 163: 32 85  3 75  5 24 89 83 41 42 | 83 72 21 81 63 58 55 29 23 54 90 73 41 27 75 37 44 32 85 26 89 71 79 94 62
Card 164: 15 69 67 25 71 33 17 56 29 72 | 26 72 71 42 92 96 33 67 43 69 56 45 55 15 31 38 25 98 14 10 17 29 44 27 68
Card 165: 53 33 28 11 61 78 97 43 45 25 | 57 61 45 33  1 95 74 69 18 21 53 28 11 78 97 46 59 38 94 68 43 60 23 25 44
Card 166: 91 52  8 73 42 61 36 21 64 46 | 87 82 46  3 85 95 21 70 62 79 91 40 76 31 51  1 56 39 86 14 25 55 18 30 45
Card 167:  6 92  7 10  5 96  9 19 64 75 | 75 16 64 60 40 91  7  9 21 92 79 29 19 96  5 34 45 23 88 59 54 46 10 26  6
Card 168: 53 37 15  3  9 59 50 83 56  8 | 42 72 50  8 26 66 83 56 47 21 55 70 34 97 96 22 61  2 59 39 43 28 60 64 33
Card 169: 68 58 32 96  1 73 36 54 15 39 | 93 29 73  9 79 87 36 15 62 91 74 10 61 47 69  2 14 30 12 27 42 77 19 57 16
Card 170: 71 64 37 95  3 33 66 10 45  1 | 65 41 18 23  6 33 48 64 37 87 36 80 10 99  1 29 26  4 95 49 63 45 27 71 62
Card 171: 81 26  6 63 39 10 75 15 59 72 | 84 10 48 26 81 46 50 27 37 77 66 52  8  9  6 83 15 80 88  5 47 35 25 63 33
Card 172: 71  8 56 34 57 74 11 79 96 78 | 36 72 31 99 63 54 89  4 44 41 76 66 25 50 92 37  3  7 15 30 86 35 77 19 61
Card 173: 16 34 58 73 30 80 27 81 77 24 | 80 77 29 98 81 17 38 16 97  5 13 34 32 50 49 31 40 39 79 76 95 91 82 85 24
Card 174: 39 16 90  6 73 64 79 95 97 74 | 96 41 15 32 76 14 31 72 12 68  9 91 26 78 47 20 87 44 86 54 21 77 81 60 11
Card 175: 16  6 59 65 30 67 17 63 31 20 | 55  6 79 27 98 91 14 44 29 57 53 78 10 84 97 82 65 56 37 48  4 32  7 94 86
Card 176: 99 51 52 75 17 41 15 10 70 42 | 16 83 76 91 74 42 94 59  8 53 88 13 95 93 29 30 27 40 69 67 51 77 81 35  2
Card 177: 50 51  1 83  4 38 59 76 28 43 | 70 30 23 61 82 35 15 83 49 53  9 46 11 38 72 26 98  8 39 63 55 69 13 22 84
Card 178: 57 35 97 89 84 22 19 26 47 16 | 59 64 40 65 72 32 66 80 92 94 19 21 86 63 73 31 48 96 24 25  6 83 97 34 74
Card 179: 40 23 64 45  8 43 93 10 12 38 | 31 48 28 16 37 65 87 30 41 54 85 80 26  9 25  1 78 69 51 44 36 84 52 79 20
Card 180:  6 65 82 47 78 41 21 48 93 84 | 64 89  8 77 80 17 86 53 69  1 36 16 98 38 54 73 18 97 85 46 12 55 70 37 81
Card 181:  5 41 16 11 58 85 94 40 59 93 | 76 17 30 61  6 74 59 58  5 11 93 19 43 21 82 49 16 41 40 36 13 91 85 14 94
Card 182: 92 16 68 12 61 86 55 67  7 91 | 43 55 12 16 34 67 48 79 98 31 81  7 57 71 49 21  1 97 61 99 92 95 68 39 19
Card 183: 24 49 16 73 56 88  4 11 87 21 | 87 71  7 33 24  4 55 15 73 11  1 62 85 83 78 76 88 81 64 21 35 16 29 86 91
Card 184: 97 78 45 39 22 24 56 81 12 70 | 24 26 15 57 56 52 38 81 35 97 32 92 78 45 19 18 12 37 34  1  9 42 83 51 95
Card 185: 23 65 60  4 58 74 51 71 43 78 | 91 71 18 58 43 22 25  7 92 64  2 57 35 73 29 74 13 75 65 60 61 28 80 88 96
Card 186: 28 77 70 63 90  5  6 36 83 14 | 21 60 16  2 87 50 95 70 49 55  6 73  5 45 83 11 28 57 35 63 54 34 29 65 64
Card 187: 70 94 18 87 60 68 39 91 75 23 | 56 82 74 14 45 93 67  2 22  4 15 25 80 16 10 70 87 75 27 46 88 30 99 52 63
Card 188:  8 86 30 55 16 29 70 89 32 19 | 46 12 64 10 66 89 91 51 28 31  7  2 86 80 82 62 34 49 35 65 87  4 61  9 30
Card 189:  8 81 16 14 32  9 85 94 18 76 | 23 98 39 95  7 15 75 97 50 96 37  9 90 68 14 32 16 45 78 18 99 57 81  6 65
Card 190: 42 43  4 65 45 97 62 51 81 69 |  2 19 88 50  4 43 81 10 37 49 86 54 91 80  1 20 22 55 40 71 14 97 48 70 95
Card 191:  2 28 63 20 32 74 37 65 42 38 |  9 60  2 63 89 59 58 38 57 74 67 54  5  6 73 11 37 23 20 69 27 80 24 21 53
Card 192: 77 24  5 13 18  9 26 56 27 76 | 16 44 23 45 11  2 53 66 38 25 59 91 83 51 74 77 55  7 95 69 65  6  3 62 76
Card 193: 27 37 38  3 70 21 94 42 71  7 | 64 56 39 78 89  9 52 46 97 15 90 69 14 55 31 16  7 72 75 28  4 91 18 32 48
Card 194: 86  2 31 64 69 39 24 61 59 37 | 46 85 40 90 73 92  8 71 24 97 35 70 19 57 14 23 32 15 98 77 56 82 26  6 20
Card 195: 82 32 90 59 51  6 27 24 36 98 | 74 79 95 91 14 87 39 57  1 20 37 93 68  4 54 66 86 35 36 28 38 49 65 98 67
Card 196: 54 71 23 38 79 55 78 67 44 10 | 71 17 85 93 55 72 68 14  8 11 75 86 52 41 47 61 29 53  3 59 30 21 76 92 32
Card 197:  7 65 66 60 52 23 15 27 32  3 | 59  4 79 97 91 41 83 36 22 89 19 38 96 81  8 29 49 86 46 12 25  6 24 16 78
Card 198: 89 99 29 80 68 39 38 10  2 63 | 88  8 92 81 23 54  1 12 45 96 67 86 37 98 47 34 71  4 58  3 27 41 75 93 66";



/////////////////////// SAVE ////////////////////////////////////

/*
$copy = [0];
$copy = array_merge($copy, $data);
function winning($card, $input, $copyInput)
{
    $copyCard = $copyInput[(int)$card[0]];

    $arrayWinners = $card[1];
    $arrayNumbers = $card[2];
    $match = isset($copyCard[3]) ? $copyCard[3] : 0;
    $power = 0;


    if (!isset($copyCard[3])) {
        foreach ($arrayNumbers as $scratched) {
            if (array_search($scratched, $arrayWinners)) {
                $match++;
            }
        }
    }
    $power = $match == 0 ? 0 : pow(2, $match - 1);
    if (!isset($copyCard[3])){
        $copyCard[3] = $match;
        $copyInput[$card[0]] = $copyCard; 
    } 
    if ($match != 0) {
        $input = duplication($match, $card, $input, $copyInput);
    }
    return [$power, $input, $copyInput];
}

function duplication($match, $actualCard, $input, $copyInput)
{
    // echo 'voici une fonction duplication';
    // echo'<br>';
    for ($i = 1; $i <= $match; $i++) {
        // echo 'voici un I';
        // echo'<br>';
        if ($actualCard[0] + $i < sizeof($copyInput)) {
            array_push($input, $copyInput[(int) $actualCard[0] + $i]);
            // echo ("<pre>");
            // echo($match);
            // echo'<br>';
            // print_r((int) $actualCard[0] + $i);
            // echo'<br>';
            // print_r($copyInput[(int) $actualCard[0] + $i]);
            // echo ("</pre>");
        } else {
            echo ("<div>");
            print_r("Il y a une erreur");
            echo ("</div>");
        }
    }
    // echo ("<pre>");
    // print_r(array_slice($input, 195));
    // echo ("</pre>");
    return $input;
}


function translate($input, $queue) {
    $cardKey = array_shift($queue);
    if ($cardKey > 197) {
        echo ("<pre>");
        print_r($queue);
        echo ("<pre>");
    }
    $card = $input[$cardKey];
    if (isset($card[4])) {
        foreach($card[4] as $newCard) {
            array_push($queue, $newCard-1);
        }
    }
    return $queue;
}


while (sizeof($queue) != 0 && $counter < 1000000) {
    $queue = translate($data, $queue);
    $counter++;
    // echo ("<pre>");
    // print_r(array_slice($queue,0,210));
    // echo ("</pre>");
}
*/