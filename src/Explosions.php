<?php declare(strict_types=1);
/**
 * This file is part of `Aujicini\FourWayChess`.
 *
 * Copyright (c) 2021 Aujicini
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace Aujicini\FourWayChess;

trait Explosions
{
    /**
     * Preform an atomic explosion on the destination key.
     *
     * @param int   $destination The destination key.
     * @param array $board       The four way chess board.
     *
     * @return array Returns the updated four way chess board.
     */
    public function preformExplosion($destination, $board): array
    {
        foreach ([-16, -1, 16, 1, -17, -15, 17, 15] as $direction) {
            if (in_array($board[$destination + $direction][1], [0, 1, 2, 3]))
                continue
            $board[$destination + $direction] = 0
        }
    }
}
